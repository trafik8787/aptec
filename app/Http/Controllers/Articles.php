<?php

namespace App\Http\Controllers;

use App\Http\Node\Model\ArticleNodeModel;
use App\Http\Node\Model\PageNodeModel;
use App\Http\Node\Model\SectionNodeModel;
use App\Http\Node\Model\SettingsNodeModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;

class Articles extends Controller
{

    private $article;
    private $page_article;
    private $section;
    private $settings;
    private static $sthis;

    /**
     * Articles constructor.
     * @param ArticleNodeModel $article
     * @param SectionNodeModel $modelSection
     * @param SettingsNodeModel $settings
     */
    public function __construct (ArticleNodeModel $article, SectionNodeModel $modelSection, SettingsNodeModel $settings, PageNodeModel $pageNodeModel) {
        parent::__construct();

        $this->article = $article;
        $this->section = $modelSection;
        $this->settings = $settings->find(1);

        $this->page_article = $pageNodeModel->find(4);

        parent::setSeoTitle($this->page_article->h_t);
        parent::setSeoDescription($this->page_article->h_d);
        parent::setSeoKeywords($this->page_article->h_k);

        self::$sthis = $this;

        parent::setBlocRenderLeft(['category_articles','books']);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * /articles
     */
    public function index ()
    {
        $article = $this->article->active()->orderBy('created_at', 'desk')->lastArticles($this->settings->count_last_article);
        $data = $this->page_article->data;
        return view('page.articles', compact('article', 'data'));
    }

    /**
     * @param $idCat
     * @param int $idPage
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * /articles/78/
     */
    public function category ($idCat, $idPage = 1)
    {
        if ($idPage !== null) {
            Paginator::currentPageResolver(function() use ($idPage) {
                return $idPage;
            });
        }


        $data = $this->section->find($idCat);
//        $articles = $data->articles()->paginate($this->settings->count_article_page);
        $articles = $data->articles()->orderBy('created_at', 'desk')->paginate(10);

        $data = [
            'category' => $data,
            'articles' => $articles,
            'pagination' => $articles->links('page.pagination', ['fragment_url' => '/articles/'.$idCat.'/'])
        ];

        return view('page.articlesCategory', $data);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * /articles/view/286.html
     */
    public function articleNotPage ($id)
    {
        $article = $this->article->where('ArticleID', '=', $id)->active()->first();
        $category = $this->article->find($id)->sections;
        //dd($article);
        return view('page.article', compact('article', 'category'));
    }


    /**
     * @param $idPage
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function article ($idPage, $id)
    {
        return $this->articleNotPage($id);
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function PrintArticleNotPage ($id)
    {
        $article = $this->article->where('ArticleID', '=', $id)->active()->first();
        $category = $this->article->find($id)->sections;
        return view('page.print_article',  compact('article', 'category'));

    }

    /**
     * @return mixed
     * получаем список категорий статей
     */
    public static function getCategory ()
    {
        return self::$sthis->article->category();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getFeedItems()
    {
        return ArticleNodeModel::all()->take(20);
    }

}

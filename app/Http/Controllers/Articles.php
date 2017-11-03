<?php

namespace App\Http\Controllers;

use App\Http\Node\Model\ArticleNodeModel;
use App\Http\Node\Model\SectionNodeModel;
use App\Http\Node\Model\SettingsNodeModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;

class Articles extends Controller
{

    private $article;
    private $section;
    private $settings;
    private static $sthis;

    /**
     * Articles constructor.
     * @param ArticleNodeModel $article
     * @param SectionNodeModel $modelSection
     * @param SettingsNodeModel $settings
     */
    public function __construct (ArticleNodeModel $article, SectionNodeModel $modelSection, SettingsNodeModel $settings) {
        parent::__construct();
        $this->article = $article;
        $this->section = $modelSection;
        $this->settings = $settings->find(1);
        self::$sthis = $this;
        parent::setBlocRenderLeft(['category_articles','books']);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * /articles
     */
    public function index ()
    {
        $article = $this->article->active()->lastArticles($this->settings->count_last_article);
        return view('page.articles', compact('article'));
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
        $articles = $data->articles()->paginate(10);

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


    public function article ($idPage, $id)
    {
        return $this->articleNotPage($id);
    }


    /**
     * @return mixed
     * получаем список категорий статей
     */
    public static function getCategory ()
    {
        return self::$sthis->article->category();
    }

}

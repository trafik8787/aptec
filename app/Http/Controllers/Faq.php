<?php

namespace App\Http\Controllers;

use App\Http\Node\Model\FaqNodeModel;
use App\Http\Node\Model\PageNodeModel;
use App\Http\Node\Model\SectionNodeModel;
use App\Http\Node\Model\SettingsNodeModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class Faq extends Controller
{
    private $faq;
    private $page_faq;
    private $section;
    private $settings;
    private $paginator;
    private static $sthis;

    /**
     * Faq constructor.
     * @param FaqNodeModel $model
     */
    public function __construct (FaqNodeModel $model, SectionNodeModel $modelSection, SettingsNodeModel $settings, PageNodeModel $pageNodeModel) {

        parent::__construct();

        $this->settings = $settings->find(1);
        $this->faq = $model;
        $this->page_faq = $pageNodeModel->find(3);
        $this->section = $modelSection;
        self::$sthis = $this;

        parent::setSeoTitle($this->page_faq->h_t);
        parent::setSeoDescription($this->page_faq->h_d);
        parent::setSeoKeywords($this->page_faq->h_k);

        parent::setBlocRenderLeft(['popular_faq', 'books']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index ()
    {
       // dd(self::popularFaq());
        //dd($this->faq->orderBy('AnswerDate', 'desc')->take($this->settings->count_last_faq)->get());
        $data = [
            'data' => $this->page_faq->data,
            'last_faq' => $this->faq->orderBy('AnswerDate', 'desc')->take($this->settings->count_last_faq)->get(),
            'category' => $this->getCategoryList()
        ];

        return view('page.faq', $data);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * questions/view/{idPage?}/{id}.html
     */
    public function showFaq ($idPage = null, $id = null)
    {

        $data = $this->faq->where('QuestionID', '=', $id)->where('Active', '=', 1)->first();
        $category = $data->sections;

        return view('page.faq_showFaq', compact('data', 'category'));
    }

    /**
     * @param $id
     * questions/view/{id}.html
     */
    public function showFaqNotPage ($id)
    {
        $data = $this->faq->where('QuestionID', '=', $id)->where('Active', '=', 1)->first();
        $category = $data->sections;

        parent::setSeoTitle($data->Title);
        parent::setSeoDescription($data->Description);
        parent::setSeoKeywords($data->KeyWords);

        return view('page.faq_showFaq', compact('data', 'category'));
    }

    /**
     * @param $idCat категория
     * @param null $idPage номер страницы
     * получаем все вопросы категории с пагинацией
     */
    public function showCategoryFaq ($idCat, $idPage = 1)
    {

        if ($idPage !== null) {
            Paginator::currentPageResolver(function() use ($idPage) {
                return $idPage;
            });
        }

        $data = $this->section->find($idCat);
        $questions = $data->questions()->paginate($this->settings->count_faq_page);


        $data = [
            'category' => $data,
            'questions' => $questions,
            'pagination' => $questions->links('page.pagination', ['fragment_url' => '/questions/'.$idCat.'/'])
        ];

        return view('page.faq-showQuistensCategory', $data);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * url /questions/list/
     */
    public function showFaqList ()
    {

        $data = [
            'category' => $this->getCategoryList()
        ];

        return view('page.faq-list-category', $data);
    }


    /**
     * @return mixed получаем список категорий вопросов
     */
    public function getCategoryList ()
    {
        return $this->section->where('Consultation', '=', 1)
            ->orderBy('Section', 'asc')
            ->select('SectionID', 'Section')
            ->get()->toArray();
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function PrintShowFaqNotPage ($id)
    {
        $data = $this->faq->where('QuestionID', '=', $id)->where('Active', '=', 1)->first();
        $category = $data->sections;
        return view('page.print_faq_showFaq', compact('data', 'category'));
    }


    /**
     * @return mixed
     * получаем рандомные 3 вопроса для блока с права популярные вопросы
     */
    public static function popularFaq()
    {
        return self::$sthis->faq->inRandomOrder()->take(self::$sthis->settings->count_random_faq)->get();
    }



}

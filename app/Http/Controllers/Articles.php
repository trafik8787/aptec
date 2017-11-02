<?php

namespace App\Http\Controllers;

use App\Http\Node\Model\ArticleNodeModel;
use App\Http\Node\Model\SectionNodeModel;
use App\Http\Node\Model\SettingsNodeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Articles extends Controller
{

    private $article;
    private $section;
    private $settings;

    public function __construct (ArticleNodeModel $article,  SectionNodeModel $modelSection, SettingsNodeModel $settings) {
        parent::__construct();
        $this->article = $article;
        $this->section = $modelSection;
        $this->settings = $settings->find(1);
    }


    public function index ()
    {

        return view('page.articles');
    }

    public function category ()
    {
        return 3;
    }

    public function article ()
    {
        return 4;
    }
}

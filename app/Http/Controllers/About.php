<?php

namespace App\Http\Controllers;

use App\Http\Node\Model\PageNodeModel;
use App\Http\Node\Model\SectionNodeModel;
use Illuminate\Http\Request;

class About extends Controller
{
    /**
     * About constructor.
     */
    private $about;
    private $section;
    private static $sthis;

    /**
     * About constructor.
     * @param PageNodeModel $pageNodeModel
     * @param SectionNodeModel $sectionNodeModel
     */
    public function __construct (PageNodeModel $pageNodeModel, SectionNodeModel $sectionNodeModel) {
        parent::__construct();
        $this->about = $pageNodeModel->find(2);
        $this->section = $sectionNodeModel;
        self::$sthis = $this;
        parent::setSeoTitle($this->about->h_t);
        parent::setSeoDescription($this->about->h_d);
        parent::setSeoKeywords($this->about->h_k);
        parent::setBlocRenderLeft(['books', 'polepnaya_inform']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index ()
    {
        $about = $this->about;
        $section = $this->section->whereIn('SectionID', [12,40,15,2,6,36,33,5,3,38,8,39,30,37,10,4,28,14,11,32,34,7,22,24,35,31])
            ->orderBy('Section', 'asc')->get();
        return view('page.about', compact('about', 'section'));
    }

    public static function getLinks()
    {
        return self::$sthis->about->rdata;
    }
}

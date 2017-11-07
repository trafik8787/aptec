<?php

namespace App\Http\Controllers;

use App\Http\Node\Model\PageNodeModel;
use App\Http\Node\Model\VideoNodeModel;
use Illuminate\Http\Request;

class Video extends Controller
{

    private $video;
    private $page_video;
    private static $sthis;
    /**
     * Video constructor.
     */
    public function __construct (VideoNodeModel $videoNodeModel, PageNodeModel $pageNodeModel) {
        parent::__construct();
        parent::setBlocRenderLeft(['video']);
        self::$sthis = $this;
        $this->page_video = $pageNodeModel->find(5);
        parent::setSeoTitle($this->page_video->h_t);
        parent::setSeoDescription($this->page_video->h_d);
        parent::setSeoKeywords($this->page_video->h_k);
        $this->video = $videoNodeModel;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $video = $this->video->all();
        $data = $this->page_video->data;
        return view('page.video', compact('video', 'data'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showVideo ($id)
    {
        $video = $this->video->find($id);
        $video_other = $this->video->where('id', '!=', $id)->get();
        return view('page.video_item', compact('video', 'video_other'));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getVideo ()
    {
        return self::$sthis->video->all();
    }
}

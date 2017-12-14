<?php

namespace App\Http\Controllers;

use App\Http\Node\Model\ArticleNodeModel;
use App\Http\Node\Model\ContactNodeModel;
use App\Http\Node\Model\FaqNodeModel;
use App\Http\Node\Model\PageNodeModel;
use App\Http\Node\Model\SettingsNodeModel;
use App\Http\Node\Model\VideoNodeModel;
use App\Mail\SendContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Home extends Controller
{
    private $home;
    private $settings;
    private static $sthis;
    /**
     * Home constructor.
     */
    public function __construct (PageNodeModel $pageNodeModel, SettingsNodeModel $settingsNodeModel) {

        parent::__construct();
        $this->home = $pageNodeModel->find(1);
        $this->settings = $settingsNodeModel->find(1);
        self::$sthis = $this;
        parent::setBlocRenderLeft(['books', 'links']);
        parent::setSeoTitle($this->home->h_t);
        parent::setSeoDescription($this->home->h_d);
        parent::setSeoKeywords($this->home->h_k);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index (ArticleNodeModel $articleNodeModel, FaqNodeModel $faqNodeModel, VideoNodeModel $videoNodeModel)
    {

        $data = $this->home->data;
        $article = $articleNodeModel->get()->last();
        $faq = $faqNodeModel->orderBy('AnswerDate', 'desc')->take($this->settings->count_last_faq)->get();
        $video = $videoNodeModel->get()->last();
        return view('page.home', compact('data', 'article', 'faq', 'video'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendform (Request $request, ContactNodeModel $contact)
    {

//        dd($request->input());
        $code = $request->input('CaptchaCode');
        $isHuman = captcha_validate($code);

        if ($isHuman) {
            $contact->lastname = $request->input('name');
            $contact->address = $request->input('address');
            $contact->tel = $request->input('phone');
            $contact->email = $request->input('email');
            $contact->save();

            Mail::to($this->settings->email_user)->send(new SendContact($request->input()));

            session()->flash('susses', 'Спасибо за обращение!');
            return redirect()->back();
        } else {
            session()->flash('qwe', 'Не верный код');
            return redirect()->back();
        }

    }

    public static function polesnieLinks() {
        return self::$sthis->home->rdata;
    }
}

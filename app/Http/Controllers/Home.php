<?php

namespace App\Http\Controllers;

use App\Http\Node\Model\ContactNodeModel;
use App\Http\Node\Model\PageNodeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Home extends Controller
{
    private $home;

    /**
     * Home constructor.
     */
    public function __construct (PageNodeModel $pageNodeModel) {

        parent::__construct();
        $this->home = $pageNodeModel->find(1);
        parent::setBlocRenderLeft(['books', 'links']);
        parent::setSeoTitle($this->home->h_t);
        parent::setSeoDescription($this->home->h_d);
        parent::setSeoKeywords($this->home->h_k);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index ()
    {
        //dd(get_class_methods(url()));
//        Mail::send('emails.welcome', ['key' => 'value'], function($message)
//        {
//            $message->to('trafik8787@gmail.com', 'John Smith')->subject('Welcome!');
//        });
        return view('page.home');
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
            $contact->lastname = $request->input('form_name');
            $contact->address = $request->input('form_data');
            $contact->tel = $request->input('form_phone');
            $contact->email = $request->input('form_email');
            $contact->save();
            session()->flash('susses', 'Спасибо за обращение!');
            return redirect()->back();
        } else {
            session()->flash('qwe', 'Не верный код');
            return redirect()->back();
        }

    }
}

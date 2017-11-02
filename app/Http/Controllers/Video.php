<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Video extends Controller
{
    public function __construct () {
        parent::__construct();
        parent::setBlocRenderLeft(['video']);
    }


    public function index()
    {
        return view('page.video');
    }
}

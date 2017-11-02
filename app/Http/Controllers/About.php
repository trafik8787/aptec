<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function __construct () {
        parent::__construct();

        parent::setBlocRenderLeft(['books', 'polepnaya_inform']);
    }
    public function index ()
    {
        return view('page.about');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Books extends Controller
{
    public function __construct () {
        parent::__construct();
        parent::setBlocRenderLeft(['knigi_dlya_vas']);
    }

    public function index()
    {
        return view('page.books');
    }
}

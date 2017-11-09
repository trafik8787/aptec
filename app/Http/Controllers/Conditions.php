<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Conditions extends Controller
{
    public function index()
    {
        return view('page.conditions');
    }
}

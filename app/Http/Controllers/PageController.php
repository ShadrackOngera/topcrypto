<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //show home page
    public function showHomePage()
    {
        return view('pages.home');
    }

    //show home page
    public function showAboutPage()
    {
        return view('pages.about');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    //show home page
    public function showHomePage()
    {

        $response = Http::get('https://min-api.cryptocompare.com/data/top/totalvolfull', [
            'limit' =>  10,
            'tsym' => 'USD',
            'api_key' => config('CRYTPO_API_KEY'),
        ]);

        $currencies =  ($response->json()['Data']);

        return view('pages.home')->with('currencies', $currencies);
    }

    //show home page
    public function showAboutPage()
    {
        return view('pages.about');
    }
}

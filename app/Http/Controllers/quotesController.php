<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class quotesController extends Controller
{
    //
    /**
     * Write code on Method
     *
     * @return response()
     */


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function kanyeApi()
    {
        

        $allQuotes = [];


        for ($i = 0; $i < 5; $i++) {
            $response = Http::get('https://api.kanye.rest');
            $quote = json_decode($response->getBody());
            $allQuotes[] = $quote;
        }

        // dd($allQuotes);

        return view('quotes', compact('allQuotes'));



        
    }
}

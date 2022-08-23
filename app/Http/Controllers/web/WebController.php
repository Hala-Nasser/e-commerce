<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index()
    {
        return view('web.index');
    }

    public function about(){
        $about = Page::where('id', 1)->with('pageItems')->first();
        //dd($about->pageItems[0]->title_en);
        return view('web.about')->with('about', $about);
    }

    
}
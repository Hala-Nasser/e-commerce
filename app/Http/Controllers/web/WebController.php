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
        $pages = Page::all();
//        dd($pages[5]->with('pageItems')->find(6));
//        dd($pages[5]->with('pageItems')->find(6)->pageItems[1]);
        return view('web.index')->with('pages', $pages);
    }

    public function about()
    {
        $about = Page::where('id', 1)->with('pageItems')->first();
        return view('web.about')->with('about', $about);
    }

    public function products()
    {
        return view('web.products');
    }

    public function contact()
    {
        return view('web.contact');
    }


}

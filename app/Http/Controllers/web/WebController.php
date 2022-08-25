<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Page;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index()
    {
        $pages = Page::all();
        $categories = Category::all();
        $attributes = Attribute::with('attributeAttributeValues')->get();
        return view('web.index')->with('pages', $pages)->with('categories', $categories)->with('attributes', $attributes);
    }

    public function about()
    {
        $about = Page::where('id', 1)->with('pageItems')->first();
        return view('web.about')->with('about', $about);
    }

    public function products(Request $request)
    {
        $product_page = Page::find(2);
        $categories = Category::all();
        $attributes = Attribute::with('attributeAttributeValues')->get();

        if ($request->ajax()){
//            dd($request->date);
            return response()->json(['success' => $request->date]);
        }
        return view('web.products')->with('product_page', $product_page)->with('categories', $categories)->with('attributes', $attributes);
    }

    public function contact()
    {
        $contact = Page::find(9);
        return view('web.contact')->with('contact',$contact);
    }

    public function contactUsStore(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
        ]);

        ContactUs::create($request->all());

        return response()->json(['success' => 'Successfully']);

    }


}

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
//        $attributes = Attribute::all();
//        foreach ($attributes as $attribute){
//            $attribute->attribute_value = $attribute->with('attributeAttributeValues');
//            dd($attribute->attribute_value->value_en);
//    }
        $attributes = Attribute::with('attributeAttributeValues')->get();
//        dd($attributes[0]->attributeAttributeValues[0]->value_en);
        return view('web.index')->with('pages', $pages)->with('categories', $categories)->with('attributes', $attributes);
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

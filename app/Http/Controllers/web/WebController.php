<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Order;
use App\Models\Page;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index(Request $request)
    {
        $pages = Page::all();
        $categories = Category::all();

        $users= User::all();
        $products = Product::orderBy('created_at', 'ASC')->take(4)->get();;
        $attributes = Attribute::with('attributeAttributeValues')->get();
        $latestproducts = Product::orderBy('created_at', 'ASC')->take(9)->get();
        $suggproduct = Product::orderBy('created_at', 'ASC')->take(3)->get();

        if($request->has('product_id')){
            $products = Product::where('id' ,'=' , $request->input('product_id'))->get();
            return response()->view('web.singleProduct', ['products' => $products , 'users'=> $users]);
        }
        return response()->view('web.index',
        ['products' => $products ,
        'users'=> $users ,
        'categories'=> $categories ,
        'pages'=> $pages ,
        'attributes'=> $attributes,
        'latestproducts' => $latestproducts,
        'suggproduct' => $suggproduct
        ]);

    }

    public function about()
    {
        $about = Page::where('id', 1)->with('pageItems')->first();
        return view('web.about')->with('about', $about);
    }

    public function products(Request $request)
    {
//        dd($request->get('attr'));
        $product_page = Page::find(2);
        $categories = Category::all();
        $attributes = Attribute::with('attributeAttributeValues')->get();

        if ($request->ajax()){
//            dd($request->date);
            if($request->get('attr'));
//            $products = Product::where('')
            return response()->json(['success' => $request->date]);
        }
        return view('web.products')->with('product_page', $product_page)->with('categories', $categories)->with('attributes', $attributes);
    }

    public function contact()
    {
        $contact = Page::find(9);
        return view('web.contact')->with('contact',$contact);
    }

    public function contactUsStore(Request $request)
    {
       $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
        ]);
        ContactUs::create($request->all());
        return response()->json(['success' => 'Successfully']);

    }

    public function indexsingleproduct($id)
    {
        $product = Product::find($id);
        return response()->view('web.singleProduct', ['product' => $product]);
    }

    public function cart()
    {
        $products = Order::where('status_id',1)->with('orderOrderDetails')->get();
        dd($products);
        return view('web.shooping1');
    }


}

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
use App\Models\UserProductFavorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    //
    public function index(Request $request)
    {
        $pages = Page::all();
        $categories = Category::all();

        $users = User::all();
        $products = Product::orderBy('created_at', 'ASC')->take(4)->get();;
        $attributes = Attribute::with('attributeAttributeValues')->get();
        $latestproducts = Product::orderBy('created_at', 'ASC')->take(9)->get();
        $suggproduct = Product::orderBy('created_at', 'ASC')->take(3)->get();

        if ($request->has('product_id')) {
            $products = Product::where('id', '=', $request->input('product_id'))->get();
            return response()->view('web.singleProduct', ['products' => $products, 'users' => $users]);
        }
        return response()->view('web.index',
            ['products' => $products,
                'users' => $users,
                'categories' => $categories,
                'pages' => $pages,
                'attributes' => $attributes,
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
        $product_page = Page::find(2);
        $categories = Category::all();
        $attributes = Attribute::with('attributeAttributeValues')->limit(2)->get();
        $products = Product::with('productInventories');


        if ($request->ajax()) {

            if ($request->has('category_id')) {
                if ($request->get('category_id') != 0) {
                    $inv = $products->where('category_id', $request->get('category_id'));
                }
            }

            if ($request->has('f_attr')) {
                if ($request->get('f_attr') != 0) {
                    $id = $request->get('f_attr');
                    $inv = $products->whereHas('productInventories', function ($query) use ($id) {
//                        $attr_value = $query->
                        $query->whereHas('attribute_values', function ($query) use ($id) {
                            return $query->where('id', $id);
                        });
                    });
                }
            }

            if ($request->has('s_attr')) {
                if ($request->get('s_attr') != 0) {
                    $id = $request->get('s_attr');
                    $inv = $products->whereHas('productInventories', function ($query) use ($id) {
                        $query->whereHas('attribute_values', function ($query) use ($id) {
                            return $query->where('id', $id);
                        });
                    });
                }
            }
            $products = $inv->get();

            $view = view('web.product_data', compact('products'))->render();
            return response()->json(['html' => $view]);
        }

        $products = $products->get();
        return view('web.products')->with('product_page', $product_page)->with('categories', $categories)->with('attributes', $attributes)->with('products', $products);
    }

    public function contact()
    {
        $contact = Page::find(9);
        return view('web.contact')->with('contact', $contact);
    }

    public function contactUsStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        ContactUs::create($request->all());
        return response()->json(['success' => 'Successfully']);

    }

    public function indexsingleproduct($id)
    {
        $product = Product::find($id)->with('productInventories');

        $attributes = Attribute::with('attributeAttributeValues');

//        $products = $product->whereHas('productInventories', function ($query) {
//            $query->whereHas('attribute_values', function ($query){
//                $query->whereHas('attribute', function ($query){
//                    return $query;
//                });
//            });
//        });
////        dd($invs->get());
//        $products = $products->get();
//        $attribute_values = [];
//        $attributes = [];
//
//        $att_v = AttributeValue::with('attribute')->get();
//
//        foreach ($products[0]->productInventories as $inv){
//            foreach ($inv->attribute_values as $attribute_value){
//                $attribute_values[] = $attribute_value->id;
//                foreach ($attribute_value->attribute as $attribute){
//                    $attributes[] = $attribute->title;
//                }
//            }
//        }
//        dd($attributes);
//
//
//        $array = array_unique($attribute_values);
//        dd($array);

        $attr = $attributes->whereHas('attributeAttributeValues', function ($query) use ($id) {
            $query->whereHas('attributeValueInventories', function ($query) use ($id) {
                $query->whereHas('product', function ($query) use ($id) {
                    return $query->where('id', $id);
                });
            });
        });

        dd($attr->get());
        return response()->view('web.singleProduct', ['product' => $product, 'attributes' => $attr->get()]);
    }

    public function cart()
    {
        if (Auth::user()) {
            $order = Order::where('status_id', 1)->where('user_id', Auth::id())->first();
            return view('web.shooping1')->with('order', $order);
        } else {
            return redirect('/index');
        }

    }

    public function setFavorite(Request $request)
    {
        $product_id = $request['product_id'];
        if (auth()->user()) {
            $favorite_product = UserProductFavorite::where('product_id',$product_id)->where('user_id',auth()->id())->withTrashed()->first();
            if ($favorite_product){
                if ($favorite_product->deleted_at != null){
                    $favorite_product->restore();
                }else{
                    $favorite_product->delete();
                }

            }else{
                $product = new UserProductFavorite();
                $product->product_id = $product_id;
                $product->user_id = auth()->id();

                $product->save();
            }
            return redirect()->back();
        }else{
            return redirect('/index');
        }

    }


}

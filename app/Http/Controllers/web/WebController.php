<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
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
        $attributes = Attribute::with('attributeAttributeValues')->limit(2)->get();
        $latestproducts = Product::orderBy('created_at', 'ASC')->take(9)->get();
//        $suggproduct = Product::orderBy('created_at', 'ASC')->take(3)->get();

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
//                'suggproduct' => $suggproduct
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

    public function singleProduct($id)
    {
        $product = Product::with('productInventories')->find($id);

        $attres = Attribute::with('attributeAttributeValues.attributeValueInventories')->get();

        $values = [];
        $attrs = [];

        foreach ($attres as $att) {
            $attValues = $att->attributeAttributeValues;
            foreach ($attValues as $value) {
                foreach ($value->attributeValueInventories as $attributeValueInventory){
                    if ($attributeValueInventory->product_id == $id) {
                        $values[] = $value;
                        $attrs[] = $att;
                    }
                }
            }
            $att->setAttribute('values', array_unique($values));
            $values = [];
        }
        $attrs = array_unique($attrs);

        $pages = Page::all();
        $latestproducts = Product::orderBy('created_at', 'ASC')->take(9)->get();

        return view('web.singleProduct', ['product' => $product, 'attrs' => $attrs, 'pages' => $pages, 'latestproducts'=> $latestproducts]);
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
            $favorite_product = UserProductFavorite::where('product_id', $product_id)->where('user_id', auth()->id())->withTrashed()->first();
            if ($favorite_product) {
                if ($favorite_product->deleted_at != null) {
                    $favorite_product->restore();
                } else {
                    $favorite_product->delete();
                }

            } else {
                $product = new UserProductFavorite();
                $product->product_id = $product_id;
                $product->user_id = auth()->id();

                $product->save();
            }
            return redirect()->back();
        } else {
            return redirect('/index');
        }

    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class PageController extends Controller
{
    public function getIndex()
    {
        $product = DB::table('product')->paginate(config('setting.number'));

        return view('public.page.index', ['product' => $product], compact('product'));
    }

    public function getProductsingle(Request $req)
    {
        try {
            $product = Product::where('id', $req->id)->first();
            $product_id = Category::find($product->category_id);
            $product_tt = Product::where('category_id', $product->category_id)->get();
            return view('public.page.product_single', compact('product', 'product_id', 'product_tt'));
        } catch (Exception $e) {
            return Redirect::to('/')->with('msg', ' Sorry something went worng. Please try again.');
        }
    }

    public function getProduct($category_id)
    {
        $product_type = Product::where('category_id', $category_id)->paginate(config('setting.number'));

        return view('public.page.product', ['product_type' => $product_type], compact('product_type'));
    }

    public function getContact()
    {
        return view('public.page.contact');
    }

    public function getRegister()
    {
        return view('public.page.register');
    }

    public function getShopCart()
    {
        return view('public.page.shop-cart');
    }

    public function getMyAccount()
    {
        return view('public.page.myaccount');
    }

    public function getWishlist()
    {
        return view('public.page.wishlist');
    }

    public function getCheckout()
    {
        return view('public.page.checkout');
    }

    public function getAddToCart(Request $req, $id)
    {
        $product = Product::find($id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function getUpdateToCart(Request $request)
    {
        if ($request->ajax()) {
            $id = $request->get('id');
            $qty = $request->get('qty');
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $product = Product::find($id);
            $cart->update($product, $id, $qty);
            Session::put('cart', $cart);
        }
    }

    public function getDelItemCart($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }

}

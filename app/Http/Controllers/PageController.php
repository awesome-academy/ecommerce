<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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

    public function getProduct()
    {
        return view('public.page.product');
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
}

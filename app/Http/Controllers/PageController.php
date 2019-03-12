<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('public.page.index');
    }

    public function getProduct(){
        return view('public.page.product');
    }

    public function getContact(){
        return view('public.page.contact');
    }

    public function getRegister(){
        return view('public.page.register');
    }

    public function getShopCart(){
        return view('public.page.shop-cart');
    }

    public function getMyAccount(){
        return view('public.page.myaccount');
    }

    public function getWishlist(){
        return view('public.page.wishlist');
    }

    public function getCheckout(){
        return view('public.page.checkout');
    }
    
    
}

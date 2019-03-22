<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Auth;
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

    public function getProductAll()
    {
        $product_type = DB::table('product')->paginate(config('setting.number'));

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
        $alPay = DB::table('payment')->paginate(config('setting.number'));

        return view('public.page.checkout', compact('alPay'));
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
    public function postCheckout(Request $req)
    {
        $cart = Session('cart') ? Session::get('cart') : null;
        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->name = Auth::user()->name;
        $transaction->email = Auth::user()->email;
        $transaction->date_create = date('Y-m-d');
        $transaction->address = Auth::user()->address;
        $transaction->phone = Auth::user()->phone;
        $transaction->status = config('setting.waiting_order');
        $transaction->amount = $cart->totalPrice;
        $transaction->payment_id = $req->pay;
        $transaction->messager = $req->note;
        $transaction->save();

        foreach ($cart->items as $key => $value) {
            $order = new Order;
            $order->transaction_id = $transaction->id;
            $order->product_id = $key;
            $order->quatity = $value['qty'];
            $order->price = ($value['price'] / $value['qty']);
            $order->save();
        }
        Session()->forget('cart');

        return redirect()->back()->with('msg', trans('index.order_success'));
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
    public function getSearch(Request $req)
    {
        $product = Product::where('name', 'like', '%' . $req->key . '%')
            ->orWhere('price', $req->key)
            ->paginate(config('setting.number'));

        return view('public.page.search', compact('product'));
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
    public function getSearch(Request $req)
    {
        $product = Product::where('name', 'like', '%' . $req->key . '%')
            ->orWhere('price', $req->key)
            ->paginate(config('setting.number'));

        return view('public.page.search', compact('product'));
    }

}

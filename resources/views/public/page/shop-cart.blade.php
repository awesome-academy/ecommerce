@extends('public.layouts.master')
@section('content')
<div>
    <div>
        <section class="how-overlay2 bg-img1" style="background-image: url(/source/images/post.jpg);">
            <div class="container">
                <div class="txt-center p-t-160 p-b-165">
                    <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                        Giỏ hàng
                    </h2>
                    <span class="txt-m-201 cl0 flex-c-m flex-w">
                    <a href="home.htm" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    Home
                    </a>
                    <span>
                    / Cart
                    </span>
                    </span>
                </div>
            </div>
        </section>
    </div>
    <div>
        <div class="bg0 p-tb-100">
            <div class="container">
                <form>
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head bg12">
                                <th class="column-1 p-l-30">Sản phẩm</th>
                                <th class="column-2">Giá</th>
                                <th class="column-3">Số lượng</th>
                                <th class="column-4">Tiền</th>
                            </tr>

                            @if(Session::has('cart'))
                            @foreach($product_cart as $product)
                            <tr class="table_row">
                                <td class="column-1">
                                    <div class="flex-w flex-m">
                                        <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                            <img src="{{$product['item']['image_list']}}" alt="IMG">
                                        </div>
                                        <span>
                                        {{$product['item']['name']}}
                                        </span>
                                    </div>
                                </td>
                                <td class="column-2">
                                    {{number_format($product['item']['price'])}} USD
                                </td>
                                <td class="column-3">
                                <div class="wrap-num-product flex-w flex-m bg12 p-rl-10" id="{{$product['item']['id']}}">
                                        <div class="btn-num-product-down flex-c-m fs-29"></div>
                                        <input class="txt-m-102 cl6 txt-center num-product" type="number" name="num-product1" value="{{$product['qty']}}">
                                        <div class="btn-num-product-up flex-c-m fs-16"></div>
                                    </div>
                                </td>
                                <td class="column-4">
                                    <div class="flex-w flex-sb-m">
                                        <span>
                                            {{number_format($product['item']['price']*$product['qty'])}} USD
                                        </span>
                                        <div class="fs-15 hov-cl10 pointer">
                                            <a href="{{route('del-cart', $product['item']['id'])}}">
                                            <span class="lnr lnr-cross"></span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </table>
                    </div>
                    <div class="flex-w flex-sb-m p-t-20">
                        <div class="flex-w flex-m m-r-50 m-tb-10">
                            <input class="size-a-31 bo-all-1 bocl15 txt-s-123 cl6 plh1 p-rl-20 focus1 m-r-30 m-tb-10" type="text" name="coupon" placeholder="Mã giảm giá">
                            <div class="flex-c-m txt-s-105 cl0 bg10 size-a-32 hov-btn2 trans-04 pointer p-rl-10 m-tb-10">
                                Áp dụng
                            </div>
                        </div>
                    </div>
                    <div class="flex-col-l p-t-68">
                        <span class="txt-m-123 cl3 p-b-18">
                        CART Thành tiền
                        </span>
                        <div class="flex-w flex-m bo-b-1 bocl15 w-full p-tb-18">
                            <span class="size-w-58 txt-m-109 cl3">
                            Tổng tiền
                            </span>
                            <span class="size-w-59 txt-m-104 cl6">
                                @if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif USD
                            </span>
                        </div>
                        <button class="flex-c-m txt-s-105 cl0 bg10 size-a-34 hov-btn2 trans-04 p-rl-10 m-t-43">
                        <a  class="txt-s-101 cl9 hov-cl10 trans-04" style="color:white" href="checkout.html">Thanh toán</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

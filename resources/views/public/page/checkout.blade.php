@extends('public.layouts.master')
@section('content')
<div>
    <section class="how-overlay2 bg-img1" style="background-image: url({{ config('setting.image_folder') }}/post.jpg);">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    @lang('index.btn_checkout')
                </h2>
                <span class="txt-m-201 cl0 flex-c-m flex-w">
                <a href="home.htm" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    @lang('index.welcome_home')
                </a>
                <span>
                / @lang('index.btn_checkout')
                </span>
                </span>
            </div>
        </div>
    </section>
    <div class="bg0 p-t-95 p-b-50">
        <div class="container">
            <div class="p-t-17 p-b-70">
                <div class="txt-s-101 txt-center">
                    <span class="cl3">
                    voucher?
                    </span>
                    <span class="cl10 hov12 js-toggle-panel1">
                    Click here để nhập mã
                    </span>
                </div>
                <div class="m-t-35 dis-none js-panel1">
                    <div class="size-w-60 flex-w m-rl-auto">
                        {{ Form::text('coupon', '', ['class' => 'bo-all-1 bocl15 focus1 size-a-37 txt-s-120 cl3 plh2 p-rl-20 w-full-sm','placeholder' => 'Coupon code']) }}
                        {{ Form::button( trans('index.voucher'), ['class' => 'bg10 size-a-36 txt-s-105 cl0 p-rl-15 trans-04 hov-btn2 mt-4 mt-sm-0 w-full-sm']) }}
                    </div>
                </div>
            </div>
            {{ Form::open(['route' => 'checkoutcart', 'method' => 'POST']) }}
            <div class="row">
                <div class="col-md-7 col-lg-8 p-b-50">
                    <div>
                        <h4 class="txt-m-124 cl3 p-b-28">
                            @lang('index.detail_cart')
                        </h4>
                        <div class="row p-b-50">
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        @lang('index.label_name') <span class="cl12">*</span>
                                    </div>
                                    {{ Form::text('name', Auth::user()->name, ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1', 'placeholder' => 'trương long']) }}
                                </div>
                            </div>
                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        @lang('index.label_address') <span class="cl12">*</span>
                                    </div>
                                    {{ Form::text('address', Auth::user()->address, ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1', 'placeholder'=>'08 Hà văn tính, Đà nẵng']) }}
                                </div>
                            </div>
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        @lang('index.label_phone') <span class="cl12">*</span>
                                    </div>
                                    {{ Form::text('phone', Auth::user()->phone, ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1', 'placeholder'=>'0988725058']) }}
                                </div>
                            </div>
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        @lang('index.label_email') <span class="cl12">*</span>
                                    </div>
                                    {{ Form::text('email', Auth::user()->email, ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1', 'placeholder'=>'truonglong12a1@gmail.com']) }}
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="txt-s-101 cl6 p-b-10">
                                @lang('index.order_note')
                            </div>
                            {{ Form::textarea('note', '', ['class' => 'plh2 txt-s-120 cl3 size-a-38 bo-all-1 bocl15 p-rl-20 p-tb-10 focus1', 'placeholder'=>'Ghi chú order của bạn']) }}
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 p-b-50">
                    <div class="how-bor4 p-t-35 p-b-40 p-rl-30 m-t-5">
                        <h4 class="txt-m-124 cl3 p-b-11">
                            @lang('index.product_cart')
                        </h4>
                        <div class="flex-w flex-sb-m txt-m-103 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
                            <span>
                                @lang('index.label_product')
                            </span>
                            <span>
                                @lang('index.money')
                            </span>
                        </div>
                        <!--  -->
                        @if(Session::has('cart'))
                            @foreach($product_cart as $product)
                                <div class="flex-w flex-sb-m txt-s-101 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
                                    <span>
                                        {{ $product['item']['name'] }}
                                        <img class="m-rl-3" src="{{config('setting.image_folder')}}/icons/icon-multiply.png" alt="icon">
                                            {{ $product['qty'] }}
                                    </span>
                                    <span>
                                        {{ number_format($product['item']['price']) }} USD
                                    </span>
                                </div>
                            @endforeach
                        @endif
                        <!--  -->
                        <div class="flex-w flex-m txt-m-103 bo-b-1 bocl15 p-tb-23">
                            <span class="size-w-61 cl6">
                            @lang('index.total_price')
                            </span>
                            <span class="size-w-62 cl9">
                                @if(Session::has('cart')){{ number_format($totalPrice) }} @else 0 @endif USD
                            </span>
                        </div>
                        <div class="bo-all-1 bocl15 p-b-25 m-b-30">
                            @foreach($alPay as $item)
                            <div class="flex-w flex-m bo-b-1 bocl15 p-rl-20 p-tb-16">
                                {{ Form::radio('pay', $item->id, ['class' => 'm-r-15', 'id'=>'radio1']) }}
                                {{ Form::label('radio1', $item->name ) }}
                            </div>
                            @endforeach
                        </div>
                        {{ Form::submit(trans('index.btn_checkout'), ['class' => 'flex-c-m txt-s-105 cl0 bg10 size-a-21 hov-btn2 trans-04 p-rl-10']) }}
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection

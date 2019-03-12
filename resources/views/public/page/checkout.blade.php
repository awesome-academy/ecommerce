@extends('public.layouts.master')
@section('content')
<div>
    <section class="how-overlay2 bg-img1" style="background-image: url(source/images/post.jpg);">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    Thanh toán
                </h2>
                <span class="txt-m-201 cl0 flex-c-m flex-w">
                <a href="home.htm" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                Home
                </a>
                <span>
                / Thanh toán
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
                        {{Form::text('coupon', '', ['class' => 'bo-all-1 bocl15 focus1 size-a-37 txt-s-120 cl3 plh2 p-rl-20 w-full-sm','placeholder'=>'Coupon code'])}}
                        {{ Form::button('áp dụng voucher', ['class' => 'bg10 size-a-36 txt-s-105 cl0 p-rl-15 trans-04 hov-btn2 mt-4 mt-sm-0 w-full-sm'])}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8 p-b-50">
                    <div>
                        <h4 class="txt-m-124 cl3 p-b-28">
                            Chi tiết đơn hàng
                        </h4>
                        <div class="row p-b-50">
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Tên <span class="cl12">*</span>
                                    </div>
                                    {{Form::text('first-name', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1','placeholder'=>'trương long'])}}
                                </div>
                            </div>
                            <div class="col-12 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Đại chỉ <span class="cl12">*</span>
                                    </div>
                                    {{Form::text('street', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1','placeholder'=>'08 Hà văn tính, Đà nẵng'])}}
                                </div>
                            </div>
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Số điện thoại <span class="cl12">*</span>
                                    </div>
                                    {{Form::text('phone', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1','placeholder'=>'0988725058'])}}
                                </div>
                            </div>
                            <div class="col-sm-6 p-b-23">
                                <div>
                                    <div class="txt-s-101 cl6 p-b-10">
                                        Email <span class="cl12">*</span>
                                    </div>
                                    {{Form::text('email', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1','placeholder'=>'truonglong12a1@gmail.com'])}}
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="txt-s-101 cl6 p-b-10">
                                order note
                            </div>
                            {!! Form::textarea('note', '', ['class' => 'plh2 txt-s-120 cl3 size-a-38 bo-all-1 bocl15 p-rl-20 p-tb-10 focus1','placeholder'=>'Ghi chú order của bạn']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 p-b-50">
                    <div class="how-bor4 p-t-35 p-b-40 p-rl-30 m-t-5">
                        <h4 class="txt-m-124 cl3 p-b-11">
                            Sản phẩm order
                        </h4>
                        <div class="flex-w flex-sb-m txt-m-103 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
                            <span>
                            Sản phẩm
                            </span>
                            <span>
                            Tiền
                            </span>
                        </div>
                        <!--  -->
                        <div class="flex-w flex-sb-m txt-s-101 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
                            <span>
                            Cherry
                            <img class="m-rl-3" src="source/images/icons/icon-multiply.png" alt="icon">
                            2
                            </span>
                            <span>
                            36000vnd
                            </span>
                        </div>
                        <div class="flex-w flex-sb-m txt-s-101 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
                            <span>
                            Cà chua
                            <img class="m-rl-3" src="source/images/icons/icon-multiply.png" alt="icon">
                            1
                            </span>
                            <span>
                            12000vnd
                            </span>
                        </div>
                        <!--  -->
                        <div class="flex-w flex-m txt-m-103 bo-b-1 bocl15 p-tb-23">
                            <span class="size-w-61 cl6">
                            Tổng tiền
                            </span>
                            <span class="size-w-62 cl9">
                            48000vnd
                            </span>
                        </div>
                        <div class="flex-w flex-m txt-m-103 p-tb-23">
                            <span class="size-w-61 cl6">
                            Tổng cộng
                            </span>
                            <span class="size-w-62 cl10">
                            48000vnd
                            </span>
                        </div>
                        <div class="bo-all-1 bocl15 p-b-25 m-b-30">
                            <div class="flex-w flex-m bo-b-1 bocl15 p-rl-20 p-tb-16">
                                {!! Form::radio('pay',1,['class' => 'm-r-15','id'=>'radio1']) !!}
                                {!! Form::label('radio1', trans('Kiểm tra thẻ'))!!}
                            </div>
                            <div class="content-payment bo-b-1 bocl15 p-rl-20 p-tb-15">
                                <p class="txt-s-120 cl9">
                                    Vui lòng kiểm tra thẻ
                                </p>
                            </div>
                            <div class="flex-w flex-m p-rl-20 p-t-17 p-b-10">
                                {!! Form::radio('pay', '1', true, ['class' => 'm-r-15','id'=>'radio2']) !!}
                                {!! Form::label('radio2', trans('Paypal'))!!}
                                <div class="w-full p-l-29 p-t-16">
                                    <a href="#"><img src="source/images/icons/paypal.png" alt="IMG"></a>
                                </div>
                            </div>
                            <div class="content-paypal bo-tb-1 bocl15 p-rl-20 p-tb-15 m-tb-10 dis-none">
                                <p class="txt-s-120 cl9">
                                    Thanh toán thông qua PayPal
                                </p>
                            </div>
                            <div class="p-l-49">
                                <a href="#" class="txt-s-120 cl6 hov-cl10 trans-04 p-t-10">
                                What is paypal?
                                </a>
                            </div>
                        </div>
                        {!! Form::button('Thanh toán', ['class' => 'flex-c-m txt-s-105 cl0 bg10 size-a-21 hov-btn2 trans-04 p-rl-10']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

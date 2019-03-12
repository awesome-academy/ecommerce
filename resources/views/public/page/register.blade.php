@extends('public.layouts.master')
@section('content')
<div>
    <div>
        <section class="how-overlay2 bg-img1" style="background-image: url(source/images/post.jpg);">
            <div class="container">
                <div class="txt-center p-t-160 p-b-165">
                    <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                        Đăng ký
                    </h2>
                    <span class="txt-m-201 cl0 flex-c-m flex-w">
                    <a href="index.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    Home
                    </a>
                    <span>
                    / Đăng ký
                    </span>
                    </span>
                </div>
            </div>
        </section>
    </div>
    <div>
        <div  class="bg0 p-t-95 p-b-50">
            <div class="container">
                <div style="margin: auto" class="col-md-6 p-b-50">
                    <div class="p-l-15 p-rl-0-lg">
                        <h4 class="txt-m-124 cl3 p-b-28">
                            Đăng ký
                        </h4>
                        {!! Form::open(['method'=>'POST', 'class'=>'how-bor3 p-rl-30 p-t-32 p-b-66']) !!}
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                Email <span class="cl12">*</span>
                            </div>
                            {!! Form::text('email', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1']) !!}
                        </div>
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                Số Điện Thoại <span class="cl12">*</span>
                            </div>
                            {!! Form::text('phone', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1']) !!}
                        </div>
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                Password <span class="cl12">*</span>
                            </div>
                            {!! Form::text('password', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1']) !!}
                        </div>
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                Xác nhận Password <span class="cl12">*</span>
                            </div>
                            {!! Form::text('password', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1']) !!}
                        </div>
                        <div class="flex-w flex-m p-t-15">
                            {!! Form::submit(trans('Đăng Ký'), ['class' => 'flex-c-m txt-s-105 cl0 bg10 size-a-39 hov-btn2 trans-04 p-rl-10 m-r-18']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

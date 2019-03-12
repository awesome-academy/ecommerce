@extends('public.layouts.master')
@section('content')
<div>
    <section class="how-overlay2 bg-img1" style="background-image: url(source/images/post.jpg);">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    LIÊN HỆ
                </h2>
                <span class="txt-m-201 cl0 flex-c-m flex-w">
                <a href="home.htm" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                Home
                </a>
                <span>
                / Contact
                </span>
                </span>
            </div>
        </div>
    </section>
    <!-- Form Contact -->
    <section class="container bg0 p-t-150 p-b-90">
        <div class="row">
            <div class="col-sm-10 col-md-6 col-lg-5 m-rl-auto p-b-10">
                <div class="h-full how5 m-r--30 m-r-0-lg m-l-15-xl">
                    <div class="bg-img3 h-full respon18" style="background-image: url(source/images/other-18.jpg);"></div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-7 m-rl-auto p-b-10">
                <div class="p-t-75 p-l-70 p-rl-0-lg">
                    <div class="size-a-1 flex-col-l p-b-70">
                        <div class="txt-m-201 cl10 how-pos1-parent m-b-14">
                            Liên Hệ Với Chúng Tôi
                            <div class="how-pos1">
                                <img src="source/images/icons/symbol-02.png" alt="IMG">
                            </div>
                        </div>
                        <h3 class="txt-l-101 cl3 respon1">
                            LIÊN HỆ
                        </h3>
                    </div>
                    {!! Form::open(['method'=>'POST', 'id'=>'contact-form','class'=>'validate-form','name'=>'contact']) !!}
                    <div class="row">
                        <div class="col-lg-6 p-b-20">
                            <div class="m-r--5 m-rl-0-lg validate-input" data-validate = "Name is required">
                                {!! Form::text('name', '', ['class' => 'txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20','placeholder'=>'Tên *']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6 p-b-20">
                            <div class="m-l--5 m-rl-0-lg validate-input" data-validate = "Valid email is: ex@abc.xyz">
                                {!! Form::text('email', '', ['class' => 'txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20','placeholder'=>'Email *']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6 p-b-20">
                            <div class="m-r--5 m-rl-0-lg">
                                {!! Form::text('address', '', ['class' => 'txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20','placeholder'=>'Địa chỉ *']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6 p-b-20">
                            <div class="m-l--5 m-rl-0-lg validate-input" data-validate = "Phone is required">
                                {!! Form::text('phone', '', ['id'=>'task-name','class' => 'txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20','placeholder'=>'Số điện thoại *']) !!}
                            </div>
                        </div>
                        <div class="col-12 p-b-20">
                            <div class="validate-input" data-validate = "Message is required">
                                {!! Form::textarea('msg', null,['placeholder'=>'Vấn đề của bạn','class'=>'txt-s-115 cl3 plh1 size-a-48 bo-all-1 bocl15 focus1 p-rl-20 p-tb-10']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="flex-l p-t-10">
                        {!! Form::submit(trans('Gửi'), ['class' => 'flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

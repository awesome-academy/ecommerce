@extends('public.layouts.master')
@section('content')
<div>
    <div>
        <section class="how-overlay2 bg-img1" style="background-image: url({{ config('setting.image_folder') }}/post.jpg);">
            <div class="container">
                <div class="txt-center p-t-160 p-b-165">
                    <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                        @lang('index.btn_register')
                    </h2>
                    <span class="txt-m-201 cl0 flex-c-m flex-w">
                    <a href="/" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    @lang('index.welcome_home')
                    </a>
                    <span>
                    / @lang('index.btn_register')
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
                            @lang('index.btn_register')
                        </h4>
                        {{ Form::open(['method' => 'POST', 'route' => 'register', 'class'=>'how-bor3 p-rl-30 p-t-32 p-b-66']) }}
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                @lang('index.label_name')<span class="cl12">*</span>
                            </div>
                            {{ Form::text('name', old('name'), ['class' => ['txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1', $errors->has('name') ? ' is-invalid' : ''], 'id' => 'name', 'required' => 'required', 'autofocus' => 'autofocus']) }}
                        </div>
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                @lang('index.label_email') <span class="cl12">*</span>
                            </div>
                            {{ Form::text('email', old('email'), ['class' => ['txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1', $errors->has('email') ? ' is-invalid' : ''], 'id' => 'email', 'required' => 'required']) }}
                        </div>
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                @lang('index.label_phone') <span class="cl12">*</span>
                            </div>
                            {{ Form::text('phone', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1']) }}
                        </div>
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                @lang('index.label_address') <span class="cl12">*</span>
                            </div>
                            {{ Form::text('address', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1']) }}
                        </div>
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                @lang('index.label_password') <span class="cl12">*</span>
                            </div>
                            {{ Form::password('password', ['class' => ['txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1', $errors->has('password') ? ' is-invalid' : ''], 'id' => 'password', 'required' => 'required']) }}
                        </div>
                        <div class="p-b-24">
                            <div class="txt-s-101 cl6 p-b-10">
                                @lang('index.label_confirm_password') <span class="cl12">*</span>
                            </div>
                            {{ Form::password('password_confirmation', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1', 'id' => 'password-confirm', 'required' => 'required']) }}
                        </div>
                        <div class="flex-w flex-m p-t-15">
                            {{ Form::submit( trans('index.btn_register'), ['class' => 'flex-c-m txt-s-105 cl0 bg10 size-a-39 hov-btn2 trans-04 p-rl-10 m-r-18']) }}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

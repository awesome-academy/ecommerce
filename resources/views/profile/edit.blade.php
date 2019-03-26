@extends('public.layouts.master')
@section('content')
<div>
    <section class="how-overlay2 bg-img1" >
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    @lang('index.account')
                </h2>
                <span class="txt-m-201 cl0 flex-c-m flex-w">
                    <a href="{{route('index')}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                        @lang('index.welcome_home')
                    </a>
                    <span>
                        / @lang('index.myaccount')
                    </span>
                </span>
            </div>
        </div>
    </section>
    <div class="bg0 p-t-95 p-b-70">
        <div class="container">
            <div class="tab03">
                <div class="row">
                    <div class="col-md-3 col-lg-2 p-b-30">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item p-b-16">
                                <img src="/source/images/1.png" alt="PRODUCT">
                            </li>
                            <li class="nav-item p-b-16">
                                <a class="nav-link active" data-toggle="tab" href="#accountdetail" role="tab">@lang('index.info-account')</a>
                            </li>
                            <li class="nav-item p-b-16">
                                <a class="nav-link" data-toggle="tab" href="#dashboard" role="tab">@lang('index.statistical')</a>
                            </li>
                            <li class="nav-item p-b-16">
                                <a class="nav-link" data-toggle="tab" href="#orders" role="tab">@lang('index.order')</a>
                            </li>
                            <li class="nav-item p-b-16">
                                <a class="nav-link" data-toggle="tab" href="#changepassword" role="tab">@lang('index.change_pass')</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-lg-10 p-b-30">
                        <div class="tab-content p-l-70 p-l-0-lg">
                            <div class="tab-pane fade show active" id="accountdetail" role="tabpanel">
                                {!! Form::open(['method' => 'PUT', 'route'=>['profile.update', $user->id], 'role'=>'form']) !!}
                                <legend>@lang('index.info-account')</legend>
                                <div class="form-group">
                                    {{ Form::label('name', trans('index.label_name')) }}
                                    {{ Form::text('name', $user->name, ['class' => ['form-control'], 'required' => 'required', 'autofocus' => 'autofocus']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('phone', trans('index.label_phone'))}}
                                    {{ Form::text('phone', $user->phone, ['class' => ['form-control'], 'required' => 'required', 'autofocus' => 'autofocus']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('email', trans('index.label_email')) }}
                                    {{ Form::text('email', $user->email, ['class' => ['form-control'], 'required' => 'required', 'autofocus' => 'autofocus']) }}
                                </div>
                                <a href="{{route('profile.index')}}" class="btn btn-sm btn-warning">@lang('index.btn_cancel')</a>
                                <button type="submit" class="btn btn-sm btn-success">@lang('index.btn_update')</button>
                            </div>
                            <div class="tab-pane fade" id="dashboard" role="tabpanel">
                                <p>
                                    @lang('index.statistical')
                                </p>
                            </div>
                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                <div class="bo-all-1 bocl15 flex-w flex-sb-m p-rl-30 p-tb-10 p-rl-15-ssm">
                                    <div class="flex-t p-tb-8 m-r-30">
                                        <img class="m-t-6 m-r-10" src="source/images/icons/icon-list.png" alt="IMG">
                                        <span class="size-w-53 txt-s-101 cl6">
                                        </span>
                                    </div>
                                    <a href="shop-sidebar-grid.html" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
                                        @lang('index.btn_order')
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="changepassword" role="tabpanel">
                                {!! Form::open(['method' => 'POST']) !!}
                                <div class="row">
                                    <h5 class="txt-m-109 cl3 p-rl-15 p-t-10 p-b-17">
                                        @lang('index.change_pass')
                                    </h5>
                                    <div class="col-12 p-b-23">
                                        <div>
                                            <div class="txt-s-101 cl6 p-b-10">
                                                @lang('index.pass_current')
                                            </div>
                                            {{ Form::text('current-pw', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1','placeholder'=>'mat khau moi']) }}
                                        </div>
                                    </div>
                                    <div class="col-12 p-b-23">
                                        <div>
                                            <div class="txt-s-101 cl6 p-b-10">
                                                @lang('index.pass_new')
                                            </div>
                                            {{ Form::text('new-pw', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1','placeholder'=>'mat khau moi']) }}
                                        </div>
                                    </div>
                                    <div class="col-12 p-b-23">
                                        <div>
                                            <div class="txt-s-101 cl6 p-b-10">
                                                @lang('index.rs_pass')
                                            </div>
                                            {{ Form::text('cf-new-pw', '', ['class' => 'txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1','placeholder'=>'nhap lai mat khau moi']) }}
                                        </div>
                                    </div>
                                    <div class="flex-w p-rl-15 p-t-17">
                                        {{ Form::button(trans('index.btn_update'), ['class' => 'flex-c-m txt-s-105 cl0 bg10 size-a-43 hov-btn2 trans-04 p-rl-10']) }}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

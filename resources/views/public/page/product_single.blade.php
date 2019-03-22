@extends('public.layouts.master')
@section('content')
<div>
    <section class="how-overlay2 bg-img1">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    @lang('index.shop')
                </h2>
                <span class="txt-m-201 cl0 flex-c-m flex-w">
                <a href="home.htm" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                @lang('index.welcome_home')
                </a>
                <a href="shop-sidebar-grid.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                / @lang('index.label_product')
                </a>
                <a href="#" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                / @lang('index.vegetable')
                </a>
                <span>
                / @lang('index.label_product')
                </span>
                </span>
            </div>
        </div>
    </section>
    <section class="sec-product-detail bg0 p-t-105 p-b-70">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5">
                    <div class="m-r--30 m-r-0-lg">
                        <div class="main-frame">
                            <div class="wrap-main-pic">
                                <div class="main-pic">
                                    <img src="{{ $product->image_link }}"  alt="IMG-SLIDE">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-6">
                    <div class="p-l-70 p-t-35 p-l-0-lg">
                        <h4 class="js-name1 txt-l-104 cl3 p-b-16">
                            {{ $product->name }}
                        </h4>
                        <span class="txt-m-117 cl9">
                        {{ $product->price }} $
                        </span>
                        <div class="flex-w flex-m p-t-30 ">
                            <span>@lang('index.rating'):</span>
                        </div>
                        <div class="flex-w flex-m p-b-27">
                            <span class="fs-16 cl11 lh-15 txt-center m-r-15">
                            <i class="fa fa-star m-rl-1"></i>
                            <i class="fa fa-star m-rl-1"></i>
                            <i class="fa fa-star m-rl-1"></i>
                            <i class="fa fa-star m-rl-1"></i>
                            <i class="fa fa-star m-rl-1"></i>
                            </span>
                            <span class="txt-s-115 cl6 p-b-3">
                            </span>
                        </div>
                        <p class="txt-s-101 cl6">
                        </p>
                        <div>
                            <span>@lang('index.amount'): </span>
                        </div>
                        <div class="flex-w flex-m p-b-30">
                            <div class="wrap-num-product flex-w flex-m bg12 p-rl-10 m-r-30 m-b-30">
                                <div class="btn-num-product-down flex-c-m fs-29"></div>
                                <input class="txt-m-102 cl6 txt-center num-product" type="number" name="num-product" value="1">
                                <div class="btn-num-product-up flex-c-m fs-16"></div>
                            </div>
                            <a href="{{ route('add-to-cart', $product->id) }}">
                            <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 m-b-30">
                            @lang('index.btn_add_cart')
                            </button></a>
                        </div>
                        <div class="txt-s-107 p-b-6">
                            <span class="cl6">
                                @lang('index.category')
                            </span>

                            <span class="cl9">
                                {{ $product_id->name }}
                            </span>
                        </div>
                        <div class="txt-s-107 p-b-6">
                            <span class="cl6">
                            @lang('index.money'):
                            </span>
                            <span class="cl9">
                            {{ $product->price }} $
                            </span>
                        </div>
                        <div class="txt-s-107 p-b-6">
                            <span class="cl6">
                            @lang('index.weight'):
                            </span>
                            <span class="cl9">
                            {{ $product->weight }} KG
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab02 p-t-80">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#description" role="tab">@lang('index.descript')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">@lang('index.review')</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="p-t-30">
                            <p class="txt-s-112 cl9">
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-related bg0 p-b-85">
        <div class="container">
            <div class="wrap-slick9">
                <div class="flex-w flex-sb-m p-b-33 p-rl-15">
                    <h3 class="txt-l-112 cl3 m-r-20 respon1 p-tb-15">
                       @lang('index.similar')
                    </h3>
                    <div class="wrap-arrow-slick9 flex-w m-t-6"></div>
                </div>
                <div class="slick9">
                    @foreach($product_tt as $pdtt)
                    <div class="item-slick9 p-all-15">
                        <div class="block1">
                            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                <img src="{{ $pdtt->image_link }}" alt="IMG">
                                <div class="block1-content flex-col-c-m p-b-46">
                                    <a href="#" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    {{ $pdtt->name }}
                                    </a>
                                    <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                    <h2>{{ $pdtt->price }} $</h2>
                                    </span>
                                    <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                        <a href="{{ route('product-single',$pdtt->id) }}" class="block1-icon flex-c-m wrap-pic-max-w">
                                        <img src="{{ config('setting.image_folder_icons') }}/icon-view.png" alt="ICON">
                                        </a>
                                        <a href="{{ route('add-to-cart', $pdtt->id) }}" class="block1-icon flex-c-m wrap-pic-max-w">
                                        <img src="{{ config('setting.image_folder_icons') }}/icon-cart.png" alt="ICON">
                                        </a>
                                        <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                        <img class="icon-addwish-b1" src="{{ config('setting.image_folder_icons') }}/icon-heart.png" alt="ICON">
                                        <img class="icon-addedwish-b1" src="{{ config('setting.image_folder_icons') }}/icon-heart2.png" alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection

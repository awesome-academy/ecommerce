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
            <a href="/" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                @lang('index.welcome_home')
            </a>
            <span>
                / @lang('index.label_product')
            </span>
            </span>
        </div>
    </div>
</section>
<section class="bg0 p-t-85 p-b-45">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-9 m-rl-auto p-b-50">
                <!-- Shop grid -->
                <div class="shop-grid">
                    <div class="row">
                        <!-- - -->
                        @foreach($product as $item)
                        <div class="col-sm-6 col-lg-4 p-b-30">
                            <!-- Block1 -->
                            <div class="block1">
                                <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                    <img src="{{ $item->image_list }}" alt="IMG">
                                    <div class="block1-content flex-col-c-m p-b-46">
                                        <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                            {{ $item->name }}
                                        </a>
                                        <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                            {{ $item->price }}
                                        </span>
                                        <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                            <a href="{{ route('product-single', $item->id) }}" class="block1-icon flex-c-m wrap-pic-max-w">
                                                <img src="{{ config('setting.image_folder_icons') }}/icon-view.png" alt="ICON">
                                            </a>
                                            <a href="{{ route('add-to-cart', $item->id) }}" class="block1-icon flex-c-m wrap-pic-max-w">
                                                <img src="{{config('setting.image_folder_icons')}}/icon-cart.png" alt="ICON">
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
                    <div class="flex-w flex-c-m p-t-47">{{ $product->links() }}</div>
                </div>
            </div>
        </div>
</section>
</div>
@endsection

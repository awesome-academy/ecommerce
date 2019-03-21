<div class="wrap-cart-header h-full flex-m m-l-10 menu-click">
    <div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="@if(Session::has('cart')){{Session('cart')->totalQty}}@else 0 @endif">
        <img src="source/images/icons/icon-cart-2.png" alt="CART">
    </div>
    @if(Session::has('cart'))
    <div class="cart-header menu-click-child trans-04">
        <div class="bo-b-1 bocl15">
            <div class="size-h-2 js-pscroll m-r--15 p-r-15">
                <!-- cart header item -->
                @foreach($product_cart as $product)
                <div class="flex-w flex-str m-b-25">
                    <div class="size-w-15 flex-w flex-t">
                        <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                            <img src="{{$product['item']['image_list']}}" alt="PRODUCT">
                        </a>

                        <div class="size-w-17 flex-col-l">
                            <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                {{$product['item']['name']}}
                            </a>

                            <span class="txt-s-101 cl9">
                                {{number_format($product['item']['price'])}}
                            </span>

                            <span class="txt-s-109 cl12">
                                x{{$product['qty']}}
                            </span>
                        </div>
                    </div>

                    <div class="size-w-14 flex-b">
                        <button class="lh-10">
                            <img src="source/images/icons/icon-close.png" alt="CLOSE">
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="flex-w flex-sb-m p-t-22 p-b-12">
            <span class="txt-m-103 cl3 p-r-20">
                @lang('index.total_price')
            </span>

            <span class="txt-m-111 cl6">
                @if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif USD
            </span>
        </div>
        <a href="{{route('shopcart')}}" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
            @lang('index.order_detail')
        </a>
    </div>
    @endif
</div>

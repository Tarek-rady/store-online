<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
               @foreach ($sliders as $slider )
                    <div class="item-slide">
                        <img src="{{ asset ('assets/images/slider')}}/{{ $slider->image }}" alt="" class="img-slide">
                        <div class="slide-info slide-1">
                            <h2 class="f-title"> {{ $slider->title }} <b>Watches</b></h2>
                            <span class="subtitle">{{ $slider->subtitle }}</span>
                            <p class="sale-info">Only price: <span class="price">${{ $slider->price }}</span></p>
                            <a href="{{ route('shop.show') }}" class="btn-link">Shop Now</a>
                        </div>
                    </div>
               @endforeach

            </div>
        </div>

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{ asset ('assets/images/home-1-banner-1.jpg')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{ asset ('assets/images/home-1-banner-2.jpg')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
        </div>

         <!--On Sale-->
        <div class="wrap-show-advance-info-box style-1 has-countdown">
            <h3 class="title-box">On Sale</h3>
            <div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div>
            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

              @foreach ($s_prices as $s_price )
                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="{{ route('details.products' , $s_price->slug) }}" title="{{ $s_price->name }}">
                                <figure><img src="{{ asset ('Attachments/products/')}}/{{ $s_price->image }}" width="800" height="800" alt=""></figure>
                            </a>

                        </div>
                        <div class="product-info">
                            <a href="{{ route('details.products' , $s_price->slug) }}" class="product-name"><span>{{ $s_price->name }}</span></a>
                            <div class="wrap-price"><ins><p class="product-price">${{ $s_price->sel_price }}</p></ins> <del><p class="product-price">${{ $s_price->price }}</p></del></div>
                        </div>
                    </div>
              @endforeach

            </div>
        </div>

        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{ asset ('assets/images/digital-electronic-banner.jpg')}}" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                                @foreach ($l_products as $l_product )
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{ route('details.products' , $l_product->slug) }}" title="{{ $l_product->name }}">
                                                <figure><img src="{{ asset ('Attachments/products/')}}/{{ $l_product->image }}" width="800" height="800" alt=" {{ $l_product->name }}"></figure>
                                            </a>

                                        </div>
                                        <div class="product-info">
                                            <a href="{{ route('details.products' , $l_product->slug) }}" class="product-name"><span>{{ $l_product->name }}</span></a>
                                            <div class="wrap-price"><span class="product-price">${{ $l_product->price }}</span></div>


                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

</main>

<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Digital & Electronics</span></li>
            </ul>
        </div>

        <style>

            .product-wish{

                position: absolute ;
                top: 10px ;
                left: 0 ;
                z-index: 99;
                right: 30px ;
                text-align: right ;
                padding-top: 0 ;
            }

            .product-wish .fa{

                color: #cbcbcb ;
                font-size: 32px;
            }

            .product-wish .fa:hover{

                color: #ff7007 ;
            }

            .fill-heart{
                color: #ff7007  !important;
            }
        </style>

<div class="row">


          @if(Cart::instance('wishlist')->content()->count() > 0)
            <ul class="product-list grid-products equal-container">

                @foreach (Cart::instance('wishlist')->content() as $witem )
                    <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{ route('details.products',$witem->model->slug ) }}" title="{{ $witem->model->name }}">
                                    <figure><img src="{{ asset ('Attachments/products/')}}/{{ $witem->model->image }}" alt="{{ $witem->model->name }}"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>{{ $witem->model->name }}</span></a>
                                <div class="wrap-price"><span class="product-price">${{ $witem->model->price }}</span></div>
                                <a href="#" class="btn add-to-cart"wire:click.prevent="MoveWishlistToCart('{{ $witem->rowId }}')">Move To Cart</a>

                                <div class="product-wish">
                                    <a href="#"><i class="fa fa-heart fill-heart" wire:click.prevent="removeWishlist({{ $witem->model->id }})"></i></a>

                                </div>


                            </div>
                        </div>
                    </li>

                @endforeach
            </ul>

          @else
            <div class="alert alert-danger"> No item in wishlist</div>
          @endif

</div>












    </div>
</main>

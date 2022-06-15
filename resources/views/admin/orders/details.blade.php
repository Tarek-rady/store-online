@extends('layouts.backend.master')

@section('title')
OrderDetails
@endsection

@section('css')
@endsection

@section('page-title')

<div class="page-title">

    <div class="row">
      <div class="col-sm-4">
          <h4 class="mb-0"> Dashboard</h4>
      </div>

      <div class="col-sm-8">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('admin') }}" class="default-color">Home</a></li>
          <li class="breadcrumb-item active">orders</li>
        </ol>
      </div>
    </div>

  </div>

@endsection

@section('content')


<!-- row -->
<div class="row row-sm">

    <div class="col-xl-12">
        <!-- div -->
        <div class="card mg-b-20" id="tabs-style2">
            <div class="card-body">
                <div class="text-wrap">
                    <div class="example">
                        <div class="panel panel-primary tabs-style-2">
                            <div class=" tab-menu-heading">

                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs main-nav-line">
                                        <li><a href="#tab4" class="nav-link active" data-toggle="tab">order</a></li>
                                        <li><a href="#tab5" class="nav-link" data-toggle="tab">orderItem</a></li>
                                        <li><a href="#tab6" class="nav-link" data-toggle="tab">transaction</a></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="panel-body tabs-menu-body main-content-body-right border">
                                <div class="tab-content">


                                    <div class="tab-pane active" id="tab4">
                                        <div class="table-responsive mt-15">

                                            <table class="table table-striped table-success" style="text-align:center">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">user name</th>
                                                        <td>{{ $order->User->name }}</td>
                                                        <th scope="row">subtotal</th>
                                                        <td>{{ $order->subtotal }}</td>
                                                        <th scope="row">discount</th>
                                                        <td>{{ $order->discount }}</td>
                                                        <th scope="row">tax</th>
                                                        <td>{{ $order->tax }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">total</th>
                                                        <td>{{ $order->total }}</td>
                                                        <th scope="row">FirstName</th>
                                                        <td>{{ $order->FirstName }}</td>
                                                        <th scope="row">LastName</th>
                                                        <td>{{ $order->LastName }}</td>
                                                        <th scope="row">mopile</th>
                                                        <td>{{ $order->mopile }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">email</th>
                                                        <td>{{ $order->email }}</td>
                                                        <th scope="row">line1</th>
                                                        <td>{{ $order->line1 }}</td>
                                                        <th scope="row">line2</th>
                                                        <td>{{ $order->line2 }}</td>
                                                        <th scope="row">city</th>
                                                        <td>{{ $order->city }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">province</th>
                                                        <td>{{ $order->province }}</td>
                                                        <th scope="row">country</th>
                                                        <td>{{ $order->country }}</td>
                                                        <th scope="row">zipcode</th>
                                                        <td>{{ $order->zipcode }}</td>
                                                        <th scope="row">status</th>
                                                        <td>{{ $order->status }}</td>

                                                    </tr>

                                                    <tr>
                                                        <th scope="row">order date</th>
                                                        <td>{{ $order->created_at }}</td>
                                                    </tr>


                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab5">
                                        <div class="table-responsive mt-15">

                                            <div class="wrap-iten-in-cart">

                                                  <h3 class="box-title">Products Name</h3>

                                                  <ul class="products-cart">
                                                      @foreach ($order->orderItems as $item )
                                                          <li class="pr-cart-item">
                                                              <div class="product-image">
                                                                  <figure><img src="{{ asset ('Attachments/products/')}}/{{ $item->products->image }}" alt="{{ $item->products->image }}" width="60px"></figure>
                                                              </div>
                                                              <div class="product-name">
                                                                  <a class="link-to-product" href="{{ route('details.products' , $item->products->slug) }}">{{ $item->products->name }}</a>
                                                              </div>
                                                              <div class="price-field produtc-price"><p class="price">${{ $item->price }}</p></div>
                                                              <div class="quantity">
                                                                  <div class="quantity-input">
                                                                    ${{ $item->quantity }}

                                                                  </div>
                                                              </div>
                                                              <div class="price-field sub-total"><p class="price">${{ $item->price * $item->quantity }}</p></div>

                                                          </li>
                                                     @endforeach

                                                  </ul>


                                              </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab6">
                                        <div class="table-responsive mt-15">
                                            <table class="table table-striped table-success" style="text-align:center">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">mode</th>
                                                        <td>{{ $order->transaction->mode }}</td>
                                                        <th scope="row">order</th>
                                                        <td>{{ $order->transaction->order_id }}</td>

                                                    </tr>

                                                    <tr>
                                                        <th scope="row">status</th>
                                                        <td>{{ $order->transaction->status }}</td>
                                                        <th scope="row">order date</th>
                                                        <td>{{ $order->transaction->created_at }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">order date</th>
                                                        <td>{{ $order->created_at }}</td>e
                                                    </tr>


                                                </tbody>
                                            </table>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /div -->
    </div>

</div>
<!-- /row -->




@endsection
@section('js')
@endsection

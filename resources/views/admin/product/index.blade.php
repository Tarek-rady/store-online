@extends('layouts.backend.master')

@section('title')
Products
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
          <li class="breadcrumb-item"><a href="{{ url('admin') }}" class="default-color">Dashboard</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </div>
    </div>

  </div>

@endsection

@section('content')

@include('admin.massage')

<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
               <div class="card card-statistics h-100">
                   <div class="card-body">

                       {{-- button Add new Catigory --}}
                       <div class="row">
                           <a href="{{ route('products.create') }}"> <button type="button" class="button x-small">
                            add product
                           </button></a>

                       </div><br>

                       <div class="table-responsive">
                           <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                               <thead>
                               <tr>
                                   <th>#</th>
                                   <th>name </th>
                                   <th>slug</th>
                                   <th>price</th>
                                   <th>sel_price</th>
                                   <th>SKU</th>
                                   <th>stock_status</th>
                                   <th>quantity</th>
                                   <th>Img</th>
                                   <th>Category</th>
                                   <th>Action</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($products as $Product)
                                   <tr>
                                       <td>{{ $loop->index +1 }}</td>
                                       <td>{{ $Product->name }}</td>
                                       <td>{{ $Product->slug }}</td>
                                       <td>{{ $Product->price }}</td>
                                       <td>{{ $Product->sel_price }}</td>
                                       <td>{{ $Product->SKU }}</td>
                                       <td>{{ $Product->stock_status }}</td>
                                       <td>{{ $Product->quantity }}</td>
                                       <td>
                                         <img src="{{ asset('Attachments/products/'.$Product->image) }}" width="70px" alt="">
                                       </td>
                                       <td>{{ $Product->category->name  }}</td>

                                        <td>
                                        <a href="{{ route('products.edit' ,$Product->id ) }}" class="btn btn-info btn-sm" title="تعديل" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>


                                        <button class="btn btn-danger btn-sm" title="حذف" data-toggle="modal"
                                                data-target="#Deleted{{ $Product->id }}"><i class="fa fa-trash"></i>
                                        </button>

                                       </td>
                                   </tr>
                                @include('admin.product.delete')
                               @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>

               </div>
           </div>

       </div>
       <!-- row closed -->




@endsection
@section('js')
@endsection

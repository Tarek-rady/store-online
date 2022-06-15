@extends('layouts.backend.master')

@section('title')
orders
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

<div class="row">
    <div class="col-md-12 mb-30">
               <div class="card card-statistics h-100">
                   <div class="card-body">

                       </div><br>

                       <div class="table-responsive">
                           <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                               <thead>
                               <tr>
                                   <th>#</th>
                                   <th> order name  </th>
                                   <th> subtotal </th>
                                   <th> discount </th>
                                   <th> tax </th>
                                   <th> total </th>
                                   <th> FirstName </th>
                                   <th> LastName </th>
                                   <th> mopile </th>
                                   <th> email </th>
                                   <th>zipcode</th>
                                   <th>status</th>
                                   <th>order Date</th>
                                   <th> Action </th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($Orders as $Order)
                                   <tr>
                                        <td>{{ $loop->index +1 }}</td>
                                        <td>{{ $Order->User->name  }}</td>
                                        <td>${{ $Order->subtotal }}</td>
                                        <td>${{ $Order->discount }}</td>
                                        <td>${{ $Order->tax }}</td>
                                        <td>${{ $Order->total }}</td>
                                        <td>{{ $Order->FirstName }}</td>
                                        <td>{{ $Order->LastName }}</td>
                                        <td>{{ $Order->mopile }}</td>
                                        <td>{{ $Order->email }}</td>
                                        <td>{{ $Order->zipcode}}</td>
                                        <td>{{ $Order->status}}</td>
                                        <td>{{ $Order->created_at}}</td>
                                        <td>
                                            <a href="{{ url('admin/orderDetails' ,$Order->id ) }}" class="btn btn-info btn-sm">OrderDetails</a>


                                        </td>


                                   </tr>



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

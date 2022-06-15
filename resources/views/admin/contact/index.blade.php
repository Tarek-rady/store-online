@extends('layouts.backend.master')

@section('title')
contact-us
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
          <li class="breadcrumb-item"><a href="url('admin')" class="default-color">Home</a></li>
          <li class="breadcrumb-item active">contact</li>
        </ol>
      </div>
    </div>

  </div>

@endsection

@section('content')

<!-- row -->
@include('admin.massage')


<div class="row">
    <div class="col-md-12 mb-30">
               <div class="card card-statistics h-100">
                   <div class="card-body">


                       {{-- button Add new Catigory --}}
                       <div class="row">

                       </div><br>

                       <div class="table-responsive">
                           <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                               <thead>
                               <tr>
                                   <th>#</th>
                                   <th> name  </th>
                                   <th> email </th>
                                   <th> phone </th>
                                   <th> comment </th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($Contacts as $Contact)
                                   <tr>
                                       <td>{{ $loop->index +1 }}</td>
                                       <td>{{ $Contact->name }}</td>
                                       <td>{{ $Contact->email }}</td>
                                       <td>{{ $Contact->phone }}</td>
                                       <td>{{ $Contact->comment }}</td>
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

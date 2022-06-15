@extends('layouts.backend.master')

@section('title')
Catigory
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
          <li class="breadcrumb-item active">catigries</li>
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
                            <button type="button" class="button x-small" data-toggle="modal" data-target="#AddCatigory">
                            add catigory
                           </button>

                           @include('admin.catigory.create')




                       </div><br>

                       <div class="table-responsive">
                           <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                               <thead>
                               <tr>
                                   <th>#</th>
                                   <th> catigory name  </th>
                                   <th> slug </th>
                                   <th>Action</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($Catigories as $Catigory)
                                   <tr>
                                       <td>{{ $loop->index +1 }}</td>
                                       <td>{{ $Catigory->name }}</td>
                                       <td>{{ $Catigory->slug }}</td>
                                        <td>
                                        <button class="btn btn-success btn-sm" title="تعديل" data-toggle="modal"
                                                    data-target="#Edit{{ $Catigory->id }}"><i class="fa fa-edit"></i>
                                            </button>


                                        <button class="btn btn-danger btn-sm" title="حذف" data-toggle="modal"
                                                data-target="#Delete{{ $Catigory->id }}"><i class="fa fa-trash"></i>
                                        </button>

                                       </td>
                                   </tr>

                                   @include('admin.catigory.edit')
                                   @include('admin.catigory.delete')

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

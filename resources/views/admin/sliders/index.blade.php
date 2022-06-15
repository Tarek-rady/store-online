@extends('layouts.backend.master')

@section('title')
HomeSlider
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
          <li class="breadcrumb-item active">sliders</li>
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

                       {{-- button Add new Catigory --}}
                       <div class="row">
                           <a href="{{ route('sliders.create') }}"> <button type="button" class="button x-small">
                            add slider
                           </button></a>

                       </div><br>

                       <div class="table-responsive">
                           <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                               <thead>
                               <tr>
                                   <th>#</th>
                                   <th>image</th>
                                   <th>title </th>
                                   <th>subtitle</th>
                                   <th>price</th>
                                   <th>link</th>
                                   <th>status</th>
                                   <th>Action</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($sliders as $slider)
                                   <tr>
                                       <td>{{ $loop->index +1 }}</td>
                                       <td>
                                        <img src="{{ asset('assets/images/slider/'.$slider->image) }}" width="110px" alt="">
                                       </td>
                                       <td>{{ $slider->title }}</td>
                                       <td>{{ $slider->subtitle }}</td>
                                       <td>{{ $slider->price }}</td>
                                       <td>{{ $slider->link }}</td>
                                       <td>{{ $slider->status }}</td>


                                        <td>
                                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-info btn-sm" title="تعديل" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-danger btn-sm" title="حذف" data-toggle="modal"
                                                data-target="#Deleted{{ $slider->id }}"><i class="fa fa-trash"></i>
                                        </button>

                                       </td>
                                   </tr>
                                   @include('admin.sliders.delete')
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

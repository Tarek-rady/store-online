@extends('layouts.backend.master')

@section('title')
home catigories
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
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>

  </div>

@endsection

@section('content')
@include('admin.massage')


<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">



                <form  action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                        <div class="col">
                            <label for="title">choose catigories</label>
                            <select class="form-control sel_catigories" name="catigories[]" multiple="multiple">
                                    @foreach ($catigories as $catigory )
                                        <option value="{{ $catigory->id }}">{{ $catigory->name }}</option>
                                    @endforeach
                            </select>

                        </div>

                         <div class="col">
                            <label for="title">no of products</label>
                            <input type="text" name="no_of_products" class="form-control" >

                        </div>



                    </div>



                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">submit</button>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
@section('script')

 <script>
     $(document).ready(function(){
     });
 </script>
@endsection

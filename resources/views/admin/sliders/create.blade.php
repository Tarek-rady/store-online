@extends('layouts.backend.master')

@section('title')
Add Home Slider
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
          <li class="breadcrumb-item active">slider</li>
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



                <form  action="{{ route('sliders.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf

                <div class="form-row">

                        <div class="col">
                            <label for="title"> title</label>
                            <input type="text" name="title" class="form-control" >
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                         <div class="col">
                            <label for="title"> subtitle</label>
                            <input type="text" name="subtitle" class="form-control" >
                            @error('subtitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                </div>


                <div class="form-row">

                         <div class="col">
                            <label for="title">price</label>
                            <input type="number" name="price" class="form-control" >
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">link</label>
                            <input type="text" name="link" class="form-control" >
                            @error('link')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                </div>
                <div class="form-row">

                        <div class="col">
                            <label for="title">status</label>
                            <select class="custom-select my-1 mr-sm-2" name="status">
                                <option selected>اختر من القائمه...</option>
                                <option value="inactive">inactive</option>
                                <option value="active">active</option>

                            </select>
                            @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                </div><br><br>
                <div class="row pt-4">

                    <div class="col-6">
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">
                                Home Slider Image
                            </span>
                        </label>
                        <div >
                            <input type="file" name="pic" class="form-control" >
                            <span class="form-text text-muted">Image with should be jpg , jpeg , png</span>
                            @error('pic') <span class="text-danger">{{ $message }}</span>  @enderror

                        </div>
                    </div>

                </div>



                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->




@endsection
@section('js')
@endsection

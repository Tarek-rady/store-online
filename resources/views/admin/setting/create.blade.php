@extends('layouts.backend.master')

@section('title')
add setting
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
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>

  </div>

@endsection

@section('content')

<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">



                <form  action="{{ route('setting.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">

                        <div class="col">
                            <label for="title"> email</label>
                            <input type="email" value="{{ $Setting->email }}" name="email" class="form-control" >
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="title"> phone</label>
                            <input type="number" value="{{ $Setting->phone }}" name="phone" class="form-control" >
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col">
                            <label for="title">phone2</label>
                            <input type="number" value="{{ $Setting->phone2 }}" name="phone2" class="form-control" >
                            @error('phone2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="title">addres</label>
                            <input type="text" value="{{ $Setting->addres }}" name="addres" class="form-control" >
                            @error('addres')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    </div>

                    <div class="form-row">


                            <div class="col">
                                    <label for="title">map</label>
                                    <input type="text" value="{{ $Setting->map }}" name="map" class="form-control" >
                                    @error('map')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="col">
                            <label for="title">twiter</label>
                            <input type="text" value="{{ $Setting->twiter }}" name="twiter" class="form-control" >
                            @error('twiter')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col">
                            <label for="title">facebook</label>
                            <input type="text" value="{{ $Setting->facebook }}" name="facebook" class="form-control" >
                            @error('facebook')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="title">pinterest</label>
                            <input type="text" value="{{ $Setting->pinterest }}" name="pinterest" class="form-control" >
                            @error('pinterest')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>

                    <div class="form-row">

                        <div class="col">
                            <label for="title">instagram</label>
                            <input type="text" value="{{ $Setting->instagram }}" name="instagram" class="form-control" >
                            @error('instagram')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="title">youtube</label>
                            <input type="text" value="{{ $Setting->youtube }}" name="youtube" class="form-control" >
                            @error('youtube')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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

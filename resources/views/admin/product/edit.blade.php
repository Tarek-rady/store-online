@extends('layouts.backend.master')

@section('title')
Edit products
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
          <li class="breadcrumb-item active">products</li>
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



                <form  action="{{ route('products.update' , $Product->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                   @method('PUT')
                    @csrf

                    <div class="form-row">

                        <div class="col">
                            <label for="title">product name</label>
                            <input type="text" name="name" value="{{ $Product->name }}" class="form-control" >
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                         <div class="col">
                            <label for="title">product slug</label>
                            <input type="text" name="slug" value="{{ $Product->slug }}" class="form-control" >
                            @error('slug')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">short_description</label>
                            <input type="text" name="short_description" value="{{ $Product->short_description }}" class="form-control" >
                            @error('short_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>
                    <div class="form-row">

                        <div class="col">
                            <label for="title">description</label>
                            <input type="text" name="description" value="{{ $Product->description }}" class="form-control" >
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                         <div class="col">
                            <label for="title">price</label>
                            <input type="number" name="price" value="{{ $Product->price }}" class="form-control" >
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="title">sel_price</label>
                            <input type="number" name="sel_price" value="{{ $Product->sel_price }}" class="form-control" >
                            @error('sel_price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="title">SKU</label>
                            <input type="number" name="SKU" value="{{ $Product->SKU }}" class="form-control" >
                            @error('SKU')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>
                    <div class="form-row">

                        <div class="col">
                            <label for="title">stock_status</label>
                            <select class="custom-select my-1 mr-sm-2" name="stock_status">
                                <option value="{{ $Product->stock_status }}">{{$Product->stock_status}}</option>
                                <option >???????? ???? ??????????????...</option>
                                <option value="instock">instock</option>
                                <option value="outofstock">outofstock</option>

                            </select>
                            @error('stock_status')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col">
                            <label for="title">quantity</label>
                            <input type="number" name="quantity" value="{{ $Product->quantity }}" class="form-control" >
                            @error('quantity')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="form-row">

                        <div class="col-6">
                            <div class="form-group">
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">
                                        Category
                                    </span>
                                </label>
                                <select name="catigories" class="custom-select my-1 mr-sm-2">
                                <option value="{{ $Product->catigories }}">{{ $Product->category->name }}</option>
                                    <option value=""> -- choose -- </option>
                                    @foreach($catigories as $catigory)
                                       <option value="{{ $catigory->id }}">{{ $catigory->name }}</option>
                                    @endforeach

                                </select>
                                @error('catigories') <span class="text-danger">{{ $message }}</span>  @enderror

                            </div>
                        </div>





                    </div>
                    <div class="col">
                        <label for="title">images</label>
                        <input type="text" name="images" value="{{ $Product->images }}" class="form-control" >
                        @error('images')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="row pt-4">

                        <div class="col-6">
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">
                                    Product Image
                                </span>
                            </label>
                            <div >
                                <input type="file" name="pic" class="form-control" >
                                <span class="form-text text-muted">Image with should be jpg , jpeg , png</span>
                                @error('pic') <span class="text-danger">{{ $message }}</span>  @enderror

                            </div>
                        </div>

                    </div>



                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">Edit</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->



@endsection
@section('js')
@endsection

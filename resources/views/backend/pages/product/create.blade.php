@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                @if(Session::has('msg'))
                    <h3 class="alert alert-success">{{ Session::get('msg') }}</h3>
                @endif
                    <h2 class="">Add Product</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @include('backend.partials.messages')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="name" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Enter your description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Quantity">
                    </div>
                    <div class="form-group">
                        <label for="product_image">Upload Image</label>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

    @include('backend.partials.footer')
</div>
@endsection
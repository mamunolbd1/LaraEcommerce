@extends('frontend.layouts.master')

@section('content')
<div class="container mt-4 mb-4">
    <div class="row">
      @include('frontend.partials.sidebar')
        <div class="col-md-8">
            <div class="widget">
                <h1>All Product</h1>
                <div class="row">
                    
                    @foreach($products as $product)
                        <div class="col-md-3 product-col">
                            <div class="card product-card" >

                                @foreach($product->image as $image)
                                    <img src="{{ asset('images/products/'.$image->image) }}" class="card-img-top product-img " alt="Product Image">
                                @endforeach

                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $product->title }}</h5>
                                    <p class="card-text">price- {{ $product->price}}Tk</p>
                                    <a href="#" class="btn btn-outline-warning">Add Cart</a>
                                </div>
                            </div>
                        </div>
                   @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
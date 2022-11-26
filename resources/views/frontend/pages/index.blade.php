@extends('frontend.layouts.master')

@section('content')
<div class="container mt-4 mb-4">
    <div class="row">
      @include('frontend.partials.sidebar')
        <div class="col-md-8">
            <div class="widget">
                <h1>All Product</h1>
                <div class="row">

                    <div class="col-md-3 product-col">
                        <div class="card product-card" >
                            <img src="{{ asset('images/products/1.jpg') }}" class="card-img-top product-img " alt="Product Image">

                            <div class="card-body text-center">
                                <h5 class="card-title">I Phone-10</h5>
                                <p class="card-text">price- 22200Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-col">
                        <div class="card product-card" >
                            <img src="{{ asset('images/products/1.jpg') }}" class="card-img-top product-img " alt="Product Image">

                            <div class="card-body text-center">
                                <h5 class="card-title">I Phone-10</h5>
                                <p class="card-text">price- 22200Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-col">
                        <div class="card product-card" >
                            <img src="{{ asset('images/products/1.jpg') }}" class="card-img-top product-img " alt="Product Image">

                            <div class="card-body text-center">
                                <h5 class="card-title">I Phone-10</h5>
                                <p class="card-text">price- 22200Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-col">
                        <div class="card product-card" >
                            <img src="{{ asset('images/products/1.jpg') }}" class="card-img-top product-img " alt="Product Image">

                            <div class="card-body text-center">
                                <h5 class="card-title">I Phone-10</h5>
                                <p class="card-text">price- 22200Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-col">
                        <div class="card product-card" >
                            <img src="{{ asset('images/products/1.jpg') }}" class="card-img-top product-img " alt="Product Image">

                            <div class="card-body text-center">
                                <h5 class="card-title">I Phone-10</h5>
                                <p class="card-text">price- 22200Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-col">
                        <div class="card product-card" >
                            <img src="{{ asset('images/products/1.jpg') }}" class="card-img-top product-img " alt="Product Image">

                            <div class="card-body text-center">
                                <h5 class="card-title">I Phone-10</h5>
                                <p class="card-text">price- 22200Tk</p>
                                <a href="#" class="btn btn-outline-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
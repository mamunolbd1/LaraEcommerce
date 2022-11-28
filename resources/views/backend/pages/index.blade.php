@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="card card-body">
            <h3>Welcome To Your Admin Panel</h3>
            <br>
            <br>
            <p class="">
                <a href="{!! route('index') !!}" target="__blank" class="btn btn-primary btn-lg">Visit Main Site</a>
            </p>
        </div>
    </div>

    @include('backend.partials.footer')
</div>
@endsection
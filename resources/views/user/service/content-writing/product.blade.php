@extends('layouts.user.master')

@section('content')

<!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Content Writing</h1>
        <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0">Home</h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Services</h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Content Writing</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col-lg-6 mb-2">
                    <div>
                        <img class="" height="300px;" width="500px;" src="{{ asset('user/img/product-review.jpg') }}" alt="">
                    </div>
                    <p style="color:white;">Jasa Review Produk<br>
                    <a href="{{url ('/service/content-writing/product-review/detail') }}" target="_blank" rel="noopener noreferrer">
                        Read More
                    </a>
                    </p>   
                </div>
                
            </div>
        </div>
    </div>
    
@endsection
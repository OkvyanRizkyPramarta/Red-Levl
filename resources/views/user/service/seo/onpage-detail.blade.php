@extends('layouts.user.master')

@section('content')

<!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">ON Page SEO</h1>
        <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0">Home</h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Services</h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">SEO</h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Detail</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="row justify-content-md-center">
                <div class="col-lg-12 mb-2">
                    <div class="" style="margin-top:20px;">
                        <img class="" height="500px;" width="100%;;" src="{{ asset('user/img/on-page.png') }}" alt="">
                        <hr width="100%" style="border: 1px grey solid;color:#424242;"/>
                        <div class="row">
                            <div class="col-lg-12 mb-2" style="color:white;">
                                <p style="margin-left:20px;color:white;">
                                    <p>Full package of On-Page and Off-Page SEO for Monthly, Quarterly, Semi-Annually, and Annually Basis.</p>
                                </p>
                            </div>
                            <div class="col-lg-12 mb-2" style="color:white;align-center">
                                <a href="https://api.whatsapp.com/send?phone=6281333153153&text=Permisi%20saya%20ingin%20memesan%20sebuah%20paket%20layanan%20SEO" target="_blank" rel="noopener noreferrer" class="container btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                            </div>                
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Services End -->
    
@endsection
@extends('layouts.user.master')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">About</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0">Home</h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">About</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    @foreach($about as $a)
    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('user/img/Logo-Red-levl.png') }}" width="410" height="410" alt="">
                </div>
                <div class="col-lg-8" style="color:white;">
                
                    <h1 class="display-4 text-primary text-uppercase mb-4">{{ $a->name }} </h1>
                    <p class="m-0">
                        {!! ($a->description) !!}
                    </p>
                
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- About Info Start -->
    <div class="container-fluid py-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fa fa-3x fa-map-marker-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Our Office</h5>
                            <p class="m-0">{{ $a->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fa fa-3x fa-envelope-open text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Email Us</h5>
                            <p class="m-0">{{ $a->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fas fa-3x fa-phone-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Whatsapp Number</h5>
                            <a href="https://api.whatsapp.com/send?phone={{ $a->whatsapp_number }}&text=Permisi%20saya%20ingin%20memesan%20sebuah%20paket%20layanan"><p class="m-0">+{{ $a->whatsapp_number }} </p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Info End -->
    @endforeach


    @endsection
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


    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <img class="img-fluid mb-4 mb-lg-0" src="img/Logo-Red-levl.png" width="410" height="410" alt="">
                </div>
                <div class="col-lg-8">
                    <h1 class="display-4 text-primary text-uppercase mb-4">Red Levl Mediatama </h1>
                    <p class="mb-4">Established in early 2011 in Lamongan, 
                        East Java, RedLevl was born based on the thought of a creative 
                        idea in helping the community, especially business people, 
                        to make more use of technology, especially the Internet as a 
                        media for promotion, transacting & buying and selling online.</p>
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
                            <p class="m-0">Jl. Dipomanggolo V No 280, East Java, Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fa fa-3x fa-envelope-open text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Email Us</h5>
                            <p class="m-0">redlevlmediatama@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fas fa-3x fa-phone-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Call Us</h5>
                            <p class="m-0">+6281333153153</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Info End -->


    @endsection
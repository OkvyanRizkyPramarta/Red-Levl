@extends('layouts.user.master')

@section('content')
<!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Gallery</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0">Home</h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Gallery</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Portfolio Start -->
    <div class="container-fluid pt-5" style="background: white;">
        <div class="container pt-5" style="background: white;">
            <h1 class="display-4 text-uppercase text-center mb-5">Visit Our Gallery</h1>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter="*">
                            All
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".first">
                            Design
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".second">
                            Development
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('user/img/Logo-Red-levl.png') }}" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="{{ asset('user/img/Logo-Red-levl.png') }}" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('user/img/portfolio-3.jpg') }}" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="{{ asset('user/img/portfolio-3.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('user/img/portfolio-4.jpg') }}" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="{{ asset('user/img/portfolio-4.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('user/img/portfolio-5.jpg') }}" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="{{ asset('user/img/portfolio-5.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('user/img/portfolio-6.jpg') }}" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="{{ asset('user/img/portfolio-6.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->
@endsection
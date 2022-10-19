@extends('layouts.user.master')

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('user/img/contoh3.jpg') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('user/img/contoh2.jpg') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('user/img/Untitled-2.png') }}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    
    <!-- About Start -->
    <div class="container-fluid py-5" style="background:white;">
        <div class="container py-5" style="background:white;">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 text-uppercase mb-4">
                        ABOUT 
                            <a style="color:#FF0000;">
                                RED 
                            </a>
                            <a style="color:#F1A208;"> 
                                LEVL 
                            </a> 
                                MEDIATAMA
                        </h1>
                    <p class="mb-4">
                        Established in early 2011 in Lamongan, East Java, RedLevl was born based on the 
                        thought of a creative idea in helping the community, especially business people, 
                        to make more use of technology, especially the Internet as a media for promotion, 
                        transacting & buying and selling online.
                    </p>
                    <a href="" class="btn btn-primary text-uppercase py-3 px-5">Read More</a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('user/img/Logo-Red-levl.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('user/img/Untitled-2.png') }}" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 text-uppercase mb-4" style="color:white;">Blog</h1>
                    <h5 class="text-uppercase text-primary mb-3">Clita elitr et amet et ipsum sea. Ipsum stet kasd ea et no est duo diam. Lorem dolores eos ut nonumy ipsum sit clita lorem no amet dolor dolore, stet sit dolor justo</h5>
                    <p class="mb-4">Eirmod est dolor nonumy sea amet dolore erat sit dolor et dolor vero. Tempor ipsum at justo amet at ipsum justo. Aiam kasd sea sit dolor duo elitr dolor amet, justo est ipsum amet dolor ut ipsum. Labore diam et nonumy amet dolores. Volup sit labore dolores erat, magna justo sed lorem kasd ea dolor. Labore sit clita invidunt, est dolores lorem sed ipsum kasd no amet ipsum.</p>
                    <a href="" class="btn btn-primary text-uppercase py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5" style="color:white;">Our Services</h1>
            <div class="row justify-content-md-center">
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4"> 
                        <a href="service.html" style="text-decoration: none;"> 
                            <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                            <h4 class="text-uppercase mb-4">Web <span class="d-block text-body">Design</span></h4>
                            <p class="m-0" style="color:#777777">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <a href="service.html" style="text-decoration: none;"> 
                            <i class="fa fa-3x fa-code text-primary mb-4"></i>
                            <h4 class="text-uppercase mb-4">Web <span class="d-block text-body">Development</span></h4>
                            <p class="m-0" style="color:#777777">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <a href="service.html" style="text-decoration: none;"> 
                            <i class="fa fa-3x fa-envelope-open-text text-primary mb-4"></i>
                            <h4 class="text-uppercase mb-4">Digital <span class="d-block text-body">Marketing</span></h4>
                            <p class="m-0" style="color:#777777">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <a href="service.html" style="text-decoration: none;"> 
                            <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                            <h4 class="text-uppercase mb-4">Content <span class="d-block text-body">Writing</span></h4>
                            <p class="m-0" style="color:#777777">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                        </a>
                    </div>
                </div>
            </div>
            <h1 class="mb-5 text-uppercase py-3 px-5" style="text-align: right; font-size:medium;"><a href="service.html">Read More</a></h1>
        </div>
    </div>
    <!-- Services End -->
    
    <!-- Contact Start -->
    <div class="container-fluid py-5 px-0">
        <h1 class="display-4 text-uppercase text-center mb-5" style="color:white;">Contact Us</h1>
        <div class="row justify-content-md-center mt-5 mx-0"> 
            <div class="col-10 px-0" style="height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d830.725262076715!2d112.67190041018728!3d-7.934949126911744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4656242dde02e073!2zN8KwNTYnMDQuOCJTIDExMsKwNDAnMjAuNSJF!5e0!3m2!1sid!2sid!4v1664345349840!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>  
    </div>
    <!-- Contact End -->
    
@endsection
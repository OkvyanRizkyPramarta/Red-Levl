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
            <img class="d-block w-100" src="{{ asset('user/img/5295526.jpg') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('user/img/desertedbuilding.jpg') }}" alt="Second slide">
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
    
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 px-md-5 text-center text-lg-left">
                <h1 class="display-1 text-uppercase mb-3">ABOUT RED LEVL MEDIATAMA</h1>
                <p class="text-dark mb-4" style="text-align:justify;">Established in early 2011 in Lamongan, 
                    East Java, RedLevl was born based on the thought of a creative 
                    idea in helping the community, especially business people, 
                    to make more use of technology, especially the Internet as a 
                    media for promotion, transacting & buying and selling online.
                </p>
                <a href="" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Learn More</a>
            </div>
            <div class="col-lg-6 px-0 text-right">
                <img class="img-fluid mt-5 mt-lg-0" src="{{ asset('user/img/Untitled-1.png') }}" width="500" height="500" alt="">      
            </div>
        </div>
    </div>
    <!-- Header End -->

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

    <!-- Portfolio Start -->
    <div class="container-fluid  py-5" style="background: white;">
        <div class="container pt-5 pb-3" style="background: white; ">
            <h1 class="display-4 text-uppercase text-center mb-5">Visit Our Projects</h1>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4 active" data-filter="*">
                            <i class="fa fa-star text-primary mr-2"></i>All
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".first">
                            <i class="fa fa-laptop-code text-primary mr-2"></i>Design
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".second">
                            <i class="fa fa-mobile-alt text-primary mr-2"></i>Development
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->

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
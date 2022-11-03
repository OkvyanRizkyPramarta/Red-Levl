@extends('layouts.user.master')

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css);
*, *:before, *:after {
  box-sizing: border-box;
}

body {
  color: #444;
  font-family: 'Roboto', sans-serif;
  font-size: 1rem;
  line-height: 1.5;
}

.slider {
  height: 55%;
  position: relative;
  overflow: hidden;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: row nowrap;
      -ms-flex-flow: row nowrap;
          flex-flow: row nowrap;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.slider__nav {
  width: 12px;
  height: 12px;
  margin: 2rem 12px;
  border-radius: 50%;
  z-index: 10;
  outline: 6px solid #ccc;
  outline-offset: -6px;
  box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
  cursor: pointer;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
}
.slider__nav:checked {
  -webkit-animation: check 0.4s linear forwards;
          animation: check 0.4s linear forwards;
}
.slider__nav:checked:nth-of-type(1) ~ .slider__inner {
  left: 18%;
}
.slider__nav:checked:nth-of-type(2) ~ .slider__inner {
  left: -50%;
}
.slider__nav:checked:nth-of-type(3) ~ .slider__inner {
  left: -116%;
}
.slider__nav:checked:nth-of-type(4) ~ .slider__inner {
  left: -183%;
}
.slider__nav:checked:nth-of-type(5) ~ .slider__inner {
  left: -250%;
}
.slider__nav:checked:nth-of-type(6) ~ .slider__inner {
  left: -317%;
}
.slider__inner {
  position: absolute;
  top: 0;
  left: 0;
  width: 400%;
  height: 100%;
  -webkit-transition: left 0.4s;
  transition: left 0.4s;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: row nowrap;
      -ms-flex-flow: row nowrap;
          flex-flow: row nowrap;
}
.slider__contents {
  height: 100%;
  padding: 2rem;
  text-align: center;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -webkit-flex: 1;
      -ms-flex: 1;
          flex: 1;
  -webkit-flex-flow: column nowrap;
      -ms-flex-flow: column nowrap;
          flex-flow: column nowrap;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.slider__image {
  font-size: 2.7rem;
      color: #2196F3;
}
.slider__caption {
  font-weight: 500;
  margin: 2rem 0 1rem;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  text-transform: uppercase;
}
.slider__txt {
  color: #999;
  margin-bottom: 3rem;
  max-width: 300px;
}

@-webkit-keyframes check {
  50% {
    outline-color: #333;
    box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
  }
  100% {
    outline-color: #333;
    box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
  }
}

@keyframes check {
  50% {
    outline-color: #333;
    box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
  }
  100% {
    outline-color: #333;
    box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
  }
}
</style>
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
                    <p class="mb-4"  style="color:white;">Eirmod est dolor nonumy sea amet dolore erat sit dolor et dolor vero. Tempor ipsum at justo amet at ipsum justo. Aiam kasd sea sit dolor duo elitr dolor amet, justo est ipsum amet dolor ut ipsum. Labore diam et nonumy amet dolores. Volup sit labore dolores erat, magna justo sed lorem kasd ea dolor. Labore sit clita invidunt, est dolores lorem sed ipsum kasd no amet ipsum.</p>
                    <a href="" class="btn btn-primary text-uppercase py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5" style="color:white;">Our Partners</h1>
            <div class="row justify-content-md-center">
                @foreach($partner as $p)
                <div class="col-lg-3 mb-2">
                    <div class=" rounded p-3"> 
                        <img style="margin-bottom:20px;" class="img-fluid" src="{{asset('storage/'.$p->image)}}" width="250" height="250" alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->
    <h1 class="display-4 text-uppercase text-center mb-5" style="margin-top:50px;">Our Services</h1>
        <div class="slider" style="margin-bottom:50px;">
            <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
            <input type="radio" name="slider" title="slide2" class="slider__nav"/>
            <input type="radio" name="slider" title="slide3" class="slider__nav"/>
            <input type="radio" name="slider" title="slide4" class="slider__nav"/>
            <input type="radio" name="slider" title="slide5" class="slider__nav"/>
            <input type="radio" name="slider" title="slide6" class="slider__nav"/>
            <div class="slider__inner">
                <div class="slider__contents"><i class="fa fa-3x fa-envelope-open-text text-primary mb-4"></i>
                    <h2 class="slider__caption">ADVERTISING</h2>
                    <p class="slider__txt" style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                </div>
                <div class="slider__contents"><i class="fa fa-3x fa-mobile-alt text-primary mb-4"></i>
                    <h2 class="slider__caption">APPLICATION</h2>
                    <p class="slider__txt" style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                </div>
                <div class="slider__contents"><i class="fa fa-3x fa-edit text-primary mb-4"></i>
                    <h2 class="slider__caption">CONTENT WRITING</h2>
                    <p class="slider__txt" style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                </div>
                <div class="slider__contents"><i class="fa fa-3x fa-code text-primary mb-4"></i>
                    <h2 class="slider__caption">CUSTOM</h2>
                    <p class="slider__txt" style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                </div>
                <div class="slider__contents"><i class="fa fa-3x fa-edit text-primary mb-4"></i>
                    <h2 class="slider__caption">SEO</h2>
                    <p class="slider__txt" style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                </div>
                <div class="slider__contents"><i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                    <h2 class="slider__caption">WEB</h2>
                    <p class="slider__txt" style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                </div>
            </div>
        </div>

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
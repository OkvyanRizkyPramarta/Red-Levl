<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Red Levl Mediatama</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('user/img/Logo-Red-levl.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Custom style to prevent carousel from being distorted 
           if for some reason image doesn't load */
        .carousel-item{
            height: 480px;
            position: relative;
        }

        .bg-utama{
         background-size: cover;
         background-position: center;
         text-align: center;
         height: 100%;
         width: 100%;
         display: table;
         vertical-align: middle;
         }
         
         .konten-ditengah {
         display: table-cell;
         vertical-align: middle;
         }

         
    </style>

</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-white position-relative">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="index.html" class="navbar-brand text-secondary">
                <img class="img-fluid mt-5 mt-lg-0" src="{{ asset('user/img/Logo-Red-levl.png') }}" width="110" height="110" alt="">         
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav ml-auto py-0 pr-3 border-right">
                    <a href="{{ route('customer.home') }}" style="color:white;" class="nav-item nav-link" target="_blank" rel="noopener noreferrer">HOME</a>
                    <a href="{{ route('customer.about') }}" style="color:white;" class="nav-item nav-link" target="_blank" rel="noopener noreferrer">ABOUT</a>
                    <a href="{{ route('customer.blog') }}" style="color:white;" class="nav-item nav-link" target="_blank" rel="noopener noreferrer">BLOG</a>
                    <a href="{{url('gallery')}}" class="nav-item nav-link" target="_blank" rel="noopener noreferrer">GALLERY</a>
                    <a href="{{url('internship/index')}}" class="nav-item nav-link" style="color:white;" target="_blank" rel="noopener noreferrer">INTERNSHIP</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:white;" target="_blank" rel="noopener noreferrer">SERVICES</a>
                        <div class="dropdown-menu rounded-0 m-0 dropright"> 
                            <a href="" class="dropdown-item" >ADVERTISING</a>
                            <a href="" class="dropdown-item" >APPLICATION</a>
                            <a href="" class="dropdown-item" >CONTENT WRITING</a>
                            <a href="" class="dropdown-item" >CUSTOM</a>
                            <a href="" class="dropdown-item dropdown-toggle" data-toggle="dropdown">SEO</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="" class="dropdown-item" >SEO 1</a>
                                <a href="" class="dropdown-item" >SEO 2</a>
                                <a href="" class="dropdown-item" >SEO 3</a>
                            </div>
                            <a href="{{url('service/website')}}" class="dropdown-item" >WEB</a>
                            <a href="{{url('service')}}" class="dropdown-item" style="background-color:#1f1f1f;color:white;">MORE</a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-flex align-items-center pl-4">
                    <i class="fa fa-2x fa-mobile-alt text-primary mr-3"></i>
                    <div>
                        <h6 class="text-body text-uppercase mb-1" style="color:white;"><small>Whatsapp Number</small></h6>
                        <h6 class="m-0" style="color:white;">+6281333153153</h6>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-md-5">
        <div class="row" style=margin-left:30px;>
            <div class="col-lg-7 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <img class="img-fluid mt-5 mt-lg-0 mb-3" src="{{ asset('user/img/Logo-Red-levl.png') }}" width="180" height="180" alt="">       
                </a>
                <p class="col-lg-8" style="color:white;font-size:20px;">A leading innovative digital media service in helping the community, especially business people.</p>
            </div>
            <div class="col-lg-4">
                <h6 class="text-uppercase text-white py-2" style="color:white;font-size:20px;">Follow Us</h6>
                <div class="d-flex justify-content-start mb-4">
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://www.facebook.com/RedLevl" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f" style='font-size:30px'></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square" href="https://instagram.com/redlevl?igshid=YmMyMTA2M2Y=" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram" style='font-size:30px'></i></a>
                </div>
                <p style="color:white;font-size:20px;"><i class="fa fa-map-marker-alt text-white mr-2"></i>Jl. Dipomanggolo V No 280</p>
                <p style="color:white;font-size:20px;"><i class="fa fa-phone-alt text-white mr-2"></i>+6281333153153</p>
                <p style="color:white;font-size:20px;"><i class="fa fa-envelope text-white mr-2"></i>redlevlmediatama@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="mb-2 text-center text-white-50">&copy; <a href="#">Red Levl Mediatama</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css"></script>
    <script src="https://unpkg.com/flickity@2.3.0/dist/flickity.pkgd.min.js"></script>
</body>

</html>
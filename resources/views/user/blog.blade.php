@extends('layouts.user.master')

<style>
.box{
  margin: 10px auto;
  width: 250px;
  height: 50px;
}

.container-1{
  width: 250px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}

.container-1 input#search{
  width: 350px;
  height: 50px;
  border: border;
  font-size: 12pt;
  float: left;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 10px;
}


.container-1 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
}
</style>
@section('content')
    <div class="container-fluid py-5 px-sm-3 px-md-5" style="background: white;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="box">
                    <div class="container-1">
                        <span class="icon"><i class="fa fa-search"></i></span>
                        <input type="search" id="search" placeholder="Search..." />
                    </div>
                </div><br>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-lg-4">
                <a class="navbar-brand">
                    <img style="margin-left:80px;margin-bottom:60px;" class="img-fluid mt-5 mt-lg-0" src="{{ asset('user/img/Logo-Red-levl.png') }}" width="250" height="250" alt="">       
                </a>
            </div>
            <div class="col-lg-6 col-md-6 mb-5">
                <h4 class="text-uppercase mb-4">Judul 1</h4>
                <p>Deskripsi : Volup amet magna clita tempor. Tempor sea eos vero ipsum. 
                    Lorem lorem sit sed elitr sed kasd et.
                    Volup amet magna clita tempor. Tempor sea eos vero ipsum. 
                    Lorem lorem sit sed elitr sed kasd et.</p>
                <p><i class="text-white"></i><a href="{{url('detailblog')}}">Read More</a></p>
            </div>
            <div class="col-lg-4">
                <a class="navbar-brand">
                    <img style="margin-left:80px;margin-bottom:60px;" class="img-fluid mt-5 mt-lg-0" src="{{ asset('user/img/Logo-Red-levl.png') }}" width="250" height="250" alt="">       
                </a>
            </div>
            <div class="col-lg-6 col-md-6 mb-5">
                <h4 class="text-uppercase mb-4">Judul 1</h4>
                <p>Deskripsi : Volup amet magna clita tempor. Tempor sea eos vero ipsum. 
                    Lorem lorem sit sed elitr sed kasd et.
                    Volup amet magna clita tempor. Tempor sea eos vero ipsum. 
                    Lorem lorem sit sed elitr sed kasd et.</p>
                <p><i class="text-white"></i><a href="">Read More</a></p>
            </div>
        </div>
    </div>
    
@endsection
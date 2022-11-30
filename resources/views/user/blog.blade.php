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

.boxrunningtext{
  margin: 10px auto;
  height: 50px;
}
</style>
@section('content')
<div class="container-fluid py-2" >
  <div class="row justify-content-md-center">
    <div class="col-lg-1">
      <img class="img-fluid mb-4 mb-lg-0" style="height:30px;float:right" src="{{ asset('user/img/megaphone.png') }}" alt="">
    </div>
    <div class="col-lg-8">
      <div class="boxrunningtext">
          <marquee behavior="scroll" direction="center" 
          onmouseover="this.stop();" 
          onmouseout="this.start();"
          style="color:white; border: 1px solid;border-color:white;border-radius: 10px; width: 700px; height: 30px;">
          @foreach($runningtext as $rt)
            <a style="height:-50px;">{!! ( $rt->description) !!}</a>  
          @endforeach
          </marquee>
      </div><br>
    </div>
  </div>
</div>

    <div class="container-fluid py-5" style="background: white;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="box">
                    <div class="container-1">
                        <form action="{{ route('customer.blog.search') }}" method="GET">
                            <span class="icon"><i class="fa fa-search"></i></span>
                            <input type="text" name="search" id="search" placeholder="Search..." value="{{ old('search') }}"/>
                        </form>
                    </div>
                </div><br>
            </div>
        </div>
        @foreach($blog as $b)
        <div class="row pt-2">
            <div class="col-lg-4">
                <a class="navbar-brand">
                    <img style="margin-left:80px;margin-bottom:60px;" class="img-fluid mt-5 mt-lg-0" src="{{asset('storage/'.$b->image)}}" width="250" height="250" alt="">       
                </a>
            </div>

            <div class="col-lg-6 col-md-6 mb-5">
                <ul>
                    <li>
                        <h4 class="text-uppercase mb-4">{!! Str::limit( $b->title , 80) !!}</h4>
                        <p>{!! Str::limit( $b->description , 80) !!}</p>
                        <p><i class="text-white"></i><a href="{{ route('detailblog', $b->id) }}" target="_blank" rel="noopener noreferrer">Read More</a></p>
                    </li>
                </ul>
            </div>  
        </div>
        @endforeach
    </div>
    
@endsection
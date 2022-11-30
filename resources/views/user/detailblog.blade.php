@extends('layouts.user.master')

<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
@section('content')
<div class="container-fluid py-2" >
  <div class="row justify-content-md-center">
    <div class="col-lg-1">
      <img class="img-fluid mb-4 mb-lg-0" style="height:30px;float:right" src="{{ asset('user/img/megaphone.png') }}" alt="">
    </div>
    <div class="col-lg-8">
      <div class="box">
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

<!-- About Start -->
<div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <img class="img-fluid center" src="{{asset('storage/'.$blog->image)}}" alt="">
                </div>
            </div>
        </div>
        <div class="container pt-5" style="margin-top:30px;">
            <div class="row align-items-center">
                <div class="col-lg-12" style="margin-bottom:300px;">
                    <h1 class="display-4 text-uppercase mb-4" style="color: white;text-align:center;">{{ $blog->title }}</h1>
                    <h5 class="text-primary" style="font-size:14px;margin-top:100px;">{{ $blog->writer }}, {{ $blog->created_at }}</h5>
                    <h5 class="" style="font-size:18px;color:white;text-align:justify;">{!! $blog->description !!}</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
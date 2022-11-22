@extends('layouts.user.master')

@section('content')
<!-- Login Start -->
<div class="container-fluid py-5 px-0" style="background-color:#1f1f1f;">
        <div class="row mx-0 justify-content-center" style="margin-top:10px;">
            <div class="col-lg-6 col-md-8 col-sm-10 px-0">
                <div class="contact-form rounded p-5" style="background-color:white;">
                    <div id="success"></div>
                    <h1 class="display-4 text-uppercase text-center mb-5">Detail Data Account</h1>
                    <form enctype="multipart/form-data">  
                        <div class="control-group">
                            <label style="margin-left:20px;">Username</label>
                            <input type="text" class="form-control bg-light border-0 p-4" value="{{ Auth::user()->username }}" disabled/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <label style="margin-left:20px;">Name</label>
                            <input type="text" class="form-control bg-light border-0 p-4" value="{{ Auth::user()->name }}" disabled/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <label style="margin-left:20px;">Email</label>
                            <input type="text" class="form-control bg-light border-0 p-4" value="{{ Auth::user()->email }}" disabled/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <label style="margin-left:20px;">Address</label>
                            <input type="text" class="form-control bg-light border-0 p-4" value="{{ Auth::user()->address }}" disabled/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <label style="margin-left:20px;">Phone Number</label>
                            <input type="text" class="form-control bg-light border-0 p-4" value="{{ Auth::user()->phone_number }}" disabled/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <label style="margin-left:20px;">Role</label>
                            <input type="text" class="form-control bg-light border-0 p-4" value="{{ Auth::user()->role }}" disabled/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <button class="btn text-uppercase py-3 px-5 mt-5" type="submit" style="background-color:#1f1f1f;color:#FFFFFF;">
                                        <a href="{{ url ('/internship/school/dashboard') }}" style="color:#ffffff;text-decoration:none">
                                            Back
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->

@endsection
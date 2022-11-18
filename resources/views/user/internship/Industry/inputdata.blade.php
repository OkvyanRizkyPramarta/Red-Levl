@extends('layouts.user.master')

@section('content')
<!-- Login Start -->
<div class="container-fluid py-5 px-0" style="background-color:#1f1f1f;">
        <div class="row mx-0 justify-content-center" style="margin-top:10px;">
            <div class="col-lg-6 col-md-8 col-sm-10 px-0">
                <div class="contact-form rounded p-5" style="background-color:white;">
                    <div id="success"></div>
                    <h1 class="display-4 text-uppercase text-center mb-5">Input Data Internship</h1>
                    <form method="POST" action="" enctype="multipart/form-data">  
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" name="name" value="{{ Auth::user()->name }}" required="required" placeholder="Name Internship" data-validation-required-message="Please enter a subject" disabled/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4 mt-4" name="vocational" required="required" placeholder="Vocational" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="border-0 p-4" style="margin-top:-10px;">Internship Date Start</label>
                            </div>
                                <div class="col-lg-8">
                                    <div class="control-group">
                                    <input placeholder="Internship Date" class="form-control bg-light border-0 p-4" required="required" name="internship_date_start" type="text" onfocus="(this.type='date')" data-validation-required-message="Please enter a subject" >
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="border-0 p-4" style="margin-top:-10px;">Internship Date Finish</label>
                            </div>
                                <div class="col-lg-8">
                                    <div class="control-group">
                                    <input placeholder="Internship Date" class="form-control bg-light border-0 p-4" required="required" name="internship_date_finish" type="text" onfocus="(this.type='date')" data-validation-required-message="Please enter a subject" >
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" name="people_total" required="required" placeholder="People Total" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn text-uppercase py-3 px-5 mt-5" type="submit" style="background-color:#1f1f1f;color:#FFFFFF;">Input</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->

@endsection
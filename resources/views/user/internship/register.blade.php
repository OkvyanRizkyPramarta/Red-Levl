@extends('layouts.user.master')

@section('content')
<!-- Login Start -->
<div class="container-fluid py-5 px-0" style="background-color:#1f1f1f;">
        <div class="row mx-0 justify-content-center" style="margin-top:10px;">
            <div class="col-lg-6 col-md-8 col-sm-10 px-0">
                <div class="contact-form rounded p-5" style="background-color:white;">
                    <div id="success"></div>
                    <h1 class="display-4 text-uppercase text-center mb-5">Register</h1>
                    <form method="POST" action="{{ route('internship.register.role') }}" enctype="multipart/form-data">
                    @csrf     
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" name="name" placeholder="Name Internship" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" name="username" placeholder="Username" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control bg-light border-0 p-4" name="email" placeholder="Email" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control bg-light border-0 p-4 mt-4" name="password" placeholder="Password" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control bg-light border-0 p-4 mt-4" name="address" placeholder="Your Address" required="required" data-validation-required-message="Please enter a subject"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4 mt-4" name="phone_number" placeholder="Phone Number" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4 mt-4" name="vocational" placeholder="Vocational" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="border-0 p-4" style="margin-top:-10px;">Internship Date</label>
                            </div>
                                <div class="col-lg-8">
                                    <div class="control-group">
                                    <input placeholder="Internship Date" class="form-control bg-light border-0 p-4" name="internship_date" type="text" onfocus="(this.type='date')" required="required" data-validation-required-message="Please enter a subject" >
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" name="people_total" placeholder="People Total" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="border-0 p-4" style="margin-top:-20px;">Internship Relationship</label>
                            </div>
                                <div class="col-lg-8">
                                    <div class="control-group">
                                        <select class="form-control bg-light border-0" name="role" value="{{ old('role') }}" style="height:45px;">
                                            <option value="1">School</option>
                                            <option value="2">University</option>
                                            <option value="3">Industry</option>
                                        </select >
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            
						</div>
                        <div class="text-center">
                            <button class="btn btn-primary text-uppercase py-3 px-5 mt-5" type="submit">Register</button>
                        </div>
                        <div class="text-center" style="margin-top:20px;">
                           <p>If you have an account, you can login <a href="{{ route ('internship.login') }}" target="_blank" rel="noopener noreferrer">here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->

@endsection
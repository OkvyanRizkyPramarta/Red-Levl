@extends('layouts.user.master')

@section('content')
<!-- Login Start -->
<div class="container-fluid py-5 px-0" style="background-color:#1f1f1f;">
        <div class="row mx-0 justify-content-center" style="margin-top:10px;">
            <div class="col-lg-6 col-md-8 col-sm-10 px-0">
                <div class="contact-form rounded p-5" style="background-color:white;">
                    <div id="success"></div>
                    <h1 class="display-4 text-uppercase text-center mb-5">Login</h1>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" id="name" placeholder="Name Industry" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4 mt-4" id="password" placeholder="Password" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <select name="categories_intership" class="form-control bg-light border-0 p-4 mt-4"  placeholder="Password">
                                <option value="volvo">Company</option>
                                <option value="saab">School/University</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary text-uppercase py-3 px-5 mt-5" type="submit">login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->

@endsection
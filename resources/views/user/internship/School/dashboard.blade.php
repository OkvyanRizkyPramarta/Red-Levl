@extends('layouts.user.master')
@section('content')
<!-- Login Start -->
<div class="container-fluid py-5 px-0" style="background-color:#1f1f1f;">
        <div class="row mx-0 justify-content-center" style="margin-top:10px;">
            <div class="col-lg-10 col-md-8 col-sm-10 px-0">
                <div class="contact-form rounded p-5" style="background-color:white;">
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2>Welcome, {{ Auth::user()->name }}</h2>
                            </div>
                            <div class="col-lg-6 text-right">
                                <button class="btn" type="submit" style="background-color:#1f1f1f;color:#FFFFFF;"><a href="{{ route('signout') }}">Log Out</a></button>
                            </div>
                        </div>
                        <!-- Data Table area Start-->
                        <div class="data-table-area">
                            <div class="container-fluid" style="background-color:#1f1f1f;">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="data-table-list">
                                            <div class="text-right" style="margin-bottom:20px;">
                                                <button class="btn py-2 mt-3" type="submit" style="background-color:#FFFFFF;color:#1f1f1f;">
                                                    <a href="{{route ('school.create')}}" style="color:#1f1f1f;text-decoration:none" target="_blank" rel="noopener noreferrer">
                                                        Input Data
                                                    </a>
                                                </button>
                                            </div>
                                            <div class="table-responsive">
                                                <table id="data-table-basic" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" style="color:white;">ID</th>
                                                            <th class="text-center" style="color:white;">Name</th>
                                                            <th class="text-center" style="color:white;">Vocational</th>
                                                            <th class="text-center" style="color:white;">People Total</th>
                                                            <th class="text-center" style="color:white;">Internship Date Start</th>
                                                            <th class="text-center" style="color:white;">Internship Date Finish</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($internship as $i)
                                                    @if ($i->user->id == Auth::user()->id)
                                                        <tr>
                                                            <td class="text-center" style="color:white;">{{ $i->id }}</td> 
                                                            <td class="text-center" style="color:white;">{{ $i->user->name }}</td> 
                                                            <td class="text-center" style="color:white;">{{ $i->vocational }}</td>
                                                            <td class="text-center" style="color:white;">{{ $i->people_total }}</td>
                                                            <td class="text-center" style="color:white;">{{ $i->internship_date_start }}</td>
                                                            <td class="text-center" style="color:white;">{{ $i->internship_date_finish }}</td>
                                                        </tr>
                                                    @endif
                                                    @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th class="text-center" style="color:white;">ID</th>
                                                            <th class="text-center" style="color:white;">Name</th>
                                                            <th class="text-center" style="color:white;">Vocational</th>
                                                            <th class="text-center" style="color:white;">People Total</th>
                                                            <th class="text-center" style="color:white;">Internship Date Start</th>
                                                            <th class="text-center" style="color:white;">Internship Date Finish</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Data Table area End-->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->

@endsection
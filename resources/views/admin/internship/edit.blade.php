@extends('layouts.admin.master')

@section('content')
<!-- Breadcomb area Start-->
    <div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-form"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2 style="color:white;">Form Edit Internship</h2>
										<p style="color:white;">Please fill in the required fields</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
        <form method="POST" action="{{ route('admin.internship.update', $internship->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Name Industry</label>
                                        <input type="text" class="form-control" name="name" value="{{ $internship->user->name }}" required="required" data-validation-required-message="Please enter a subject" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Vocational</label>
                                        <input type="text" class="form-control" name="vocational" value="{{ $internship->vocational }}" required="required" data-validation-required-message="Please enter a subject">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Internship Date Start</label>
                                        <input placeholder="Internship Date" class="form-control" required="required" value="{{ $internship->internship_date_start }}" name="internship_date_start" onfocus="(this.type='date')" data-validation-required-message="Please enter a subject" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Internship Date Finish</label>
                                        <input placeholder="Internship Date" class="form-control" required="required" value="{{ $internship->internship_date_finish }}" name="internship_date_finish" onfocus="(this.type='date')" data-validation-required-message="Please enter a subject" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                    <label>People Total</label>
                                        <input type="text" class="form-control" name="people_total" value="{{ $internship->people_total }}" required="required" data-validation-required-message="Please enter a subject">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <button class="btn btn-default btn-icon-notika col-md-2">
                <i class="notika-icon notika-left-arrow"></i> 
                <a href="{{ url('admin/internship') }}">BACK</a>
            </button>
            <button class="btn btn-default btn-icon-notika col-md-2" style="float: right;">                
                SEND
                <i class="notika-icon notika-right-arrow"></i> 
            </button>
        </form>
        </div>
    </div>
    <!-- Form Element area End-->
@endsection
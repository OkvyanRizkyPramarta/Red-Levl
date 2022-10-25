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
										<h2 style="color:white;">Form About Red Levl</h2>
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
        <form method="POST" action="#" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Owner</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Address</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" data-mask="(+99) 9999999999">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Whatsapp Number</label>
                                        <input type="text" class="form-control" data-mask="(+99) 9999999999">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                                <div class="summernote-wrap mg-t-30">
                                    <div class="cmp-tb-hd">
                                    </div>
                                    <div class="cmp-tb-hd bsc-smp-sm">
                                        <label>Description</label>
                                    </div>
                                    <div class="html-editor"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <button class="btn btn-default btn-icon-notika col-md-2">
                <i class="notika-icon notika-left-arrow"></i> 
                BACK
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
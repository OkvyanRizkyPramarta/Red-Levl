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
										<h2 style="color:white;">Form Create Blog</h2>
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
        <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Title</label>
                                        <input type="text" class="form-control"  name="title">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Writer</label>
                                        <input type="text" class="form-control"  name="writer">
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
                                    <textarea type="text" class="html-editor" name="description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Picture Blog</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <button class="btn btn-default btn-icon-notika col-md-2">
                <i class="notika-icon notika-left-arrow"></i> 
                <a href="{{ route('blog.index') }}">BACK</a>
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
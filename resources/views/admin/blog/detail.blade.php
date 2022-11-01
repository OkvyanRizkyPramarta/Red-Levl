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
										<h2 style="color:white;">Form Detail Blog</h2>
										<p style="color:white;">Detail about blog</p>
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
        <form>
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
                                        <p>{{ $blog->title }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Writer</label>
                                        <p>{{ $blog->writer }}</p>
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
                                    <p>{{ $blog->description }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                    </div>
                                    <div class="nk-int-st">
                                        <label>Picture Blog</label>
                                        <img width="250px" src="{{asset('storage/'.$blog->image)}}">
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
        </form>
        </div>
    </div>
    <!-- Form Element area End-->
@endsection
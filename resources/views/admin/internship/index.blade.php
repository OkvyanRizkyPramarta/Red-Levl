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
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2 style="color:white;">Data Table Internship</h2>
										<p style="color:white;">Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Basic Example</h2>
                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">User ID</th>
                                        <th class="text-center">Vocational</th>
                                        <th class="text-center">Internship Date Start</th>
                                        <th class="text-center">Internship Date Finish</th>
                                        <th class="text-center">People Total</th>
                                        <th class="text-center" width="200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($internship as $i)
                                    <tr>
                                        <td class="text-center">{{ $i->id }}</td>
                                        <td class="text-center">{{ $i->user->name }}</td> 
                                        <td class="text-center">{{ $i->vocational }}</td>
                                        <td class="text-center">{{ $i->internship_date_start }}</td>
                                        <td class="text-center">{{ $i->internship_date_finish }}</td>
                                        <td class="text-center">{{ $i->people_total }}</td>
                                        <div class="row">
                                            <td class="text-right">
                                                <div class="col-lg-5">
                                                    <a href="{{ route('admin.internship.edit', $i->id) }}" class="btn notika-btn-black" style="color:white;"><i class="fa fa-edit"></i>
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="col-lg-5">
                                                    <form action="{{ route('admin.internship.destroy', $i->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
                                                        Delete</a>
                                                    </form>
                                                </div>
                                            </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">User ID</th>
                                        <th class="text-center">Vocational</th>
                                        <th class="text-center">Internship Date Start</th>
                                        <th class="text-center">Internship Date Finish</th>
                                        <th class="text-center">People Total</th>
                                        <th class="text-center">Action</th>
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

@endsection
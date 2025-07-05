
@extends('admin.layouts.app')
@section('content')
<div class="page-wrapper">
			<div class="page-content">

				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
					<div class="col">
					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Total Contacts</p>
									<h4 class="my-1">{{ App\Models\Contact::count()}}</h4>
									<p class="mb-0 font-13 text-success"></p>
								</div>
								<div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="bi bi-person-lines-fill"></i>
								</div>
							</div>
						</div>
					  </div>
					 </div>
					 <div class="col">
						<div class="card radius-10">
						  <div class="card-body">
							  <div class="d-flex align-items-center">
								  <div>
									  <p class="mb-0 text-secondary">Total Review</p>
									  <h4 class="my-1">{{App\Models\BLogReview::count()}}</h4>
								  </div>
								  <div class="widget-icon-large bg-gradient-success text-white ms-auto"><i class="bi-star-fill"></i>
								  </div>
							  </div>
						  </div>
					  </div>
					 </div>
					 <div class="col">
					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Total Blogs</p>
									<h4 class="my-1">{{ App\Models\Blog::count()}}</h4>
								</div>
								<div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi-file-earmark-text	"></i>
								</div>
							</div>
						</div>
					 </div>
					 </div>
					 <div class="col">
					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Total Brands</p>
									<h4 class="my-1">{{ App\Models\ServicesBrand::count()}}</h4>
								</div>
								<div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="bi bi-tools"></i>

								</div>
							</div>
						</div>
					 </div>
					 </div>
					 <div class="col">
					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Total Services</p>
									<h4 class="my-1">{{ App\Models\Service::count()}}</h4>
								</div>
								<div class="widget-icon-large bg-gradient-warning  text-white ms-auto"><i class="bi bi-tools"></i>
								</div>
							</div>
						</div>
					 </div>
					 </div>

				  </div>


			</div>
		</div>
@endsection
@section('heads')
	<link href="{{ asset('public/new-admin/assets/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet" />

@endsection

@section('scripts')
	<script src="{{ asset('public/new-admin/assets/plugins/highcharts/js/highcharts.js') }}"></script>
	<script src="{{ asset('public/new-admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>

@endsection

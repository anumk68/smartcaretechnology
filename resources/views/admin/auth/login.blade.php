<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SmartCare - Login</title>

	<link rel="icon" href="{{ asset('front_assets/img/DigiRush_Solution.png') }}" type="image/png" />
	<link href="{{ asset('public/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('public/assets/js/pace.min.js') }}"></script>
	<link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('public/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/icons.css') }}" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row justify-content-center" style="margin-top: 110px;">
					<div class="col-md-6 col-xl-4">
						<div class="card mb-0 shadow">
							<div class="card-body p-4">
								<div class="text-center mb-4">
									<h4 class="fw-bold">SmartCare</h4>
									<p class="text-muted mb-0">Login to your account</p>
								</div>

								<form method="POST" action="{{ route('login') }}">
									@csrf

									<div class="mb-3">
										<label for="inputEmailAddress" class="form-label">Email</label>
										<input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="john@example.com" required>
										@error('email')
											<div class="text-danger">{{ $message }}</div>
										@enderror
									</div>

									<div class="mb-3">
										<label for="inputChoosePassword" class="form-label">Password</label>
										<div class="input-group" id="show_hide_password">
											<input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Enter Password" required>
											<a href="javascript:;" class="input-group-text bg-transparent">
												<i class='bx bx-hide'></i>
											</a>
										</div>
										@error('password')
											<div class="text-danger">{{ $message }}</div>
										@enderror
									</div>

									<div class="d-flex justify-content-between align-items-center mb-3">
										{{-- <div class="form-check form-switch">
											<input class="form-check-input" type="checkbox" id="rememberMe">
											<label class="form-check-label" for="rememberMe">Remember Me</label>
										</div> --}}
										<a href="#">Forgot Password?</a>
									</div>

									<div class="d-grid mb-3">
										<button type="submit" class="btn btn-primary">Login</button>
									</div>

								</form>

								<div class="login-separater text-center my-4"><hr></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('public/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('public/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('public/assets/js/app.js') }}"></script>

	<!-- Password show/hide toggle -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (e) {
				e.preventDefault();
				const input = $('#show_hide_password input');
				const icon = $('#show_hide_password i');
				if (input.attr("type") === "text") {
					input.attr('type', 'password');
					icon.addClass("bx-hide").removeClass("bx-show");
				} else {
					input.attr('type', 'text');
					icon.removeClass("bx-hide").addClass("bx-show");
				}
			});
		});
	</script>
</body>
</html>

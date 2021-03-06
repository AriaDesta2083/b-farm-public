<!doctype html>
<html lang="en">
  <head>
  	<title>B-Farm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('assets/auth/css/style.css') }}">

	</head>
	<body class="img js-fullheight" style="background-image: url({{ asset('assets/images/bg_selada.png') }});">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Sudah punya akun?</h3>
						<!-- Session Status -->
						<x-auth-session-status class="mb-4 text-danger" :status="session('status')" />
				
						<!-- Validation Errors -->
						<x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
				
						<form action="{{ route('login') }}" class="signin-form" method="POST">
							@csrf
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
							</div>
						</form>
					<p class="w-100 text-center">&mdash; Atau daftar disini &mdash;</p>
					<div class="social d-flex text-center">
						<a href="{{ route('register') }}" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Daftar</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('assets/auth/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/auth/js/popper.js') }}"></script>
  <script src="{{ asset('assets/auth/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/auth/js/main.js') }}"></script>

	</body>
</html>
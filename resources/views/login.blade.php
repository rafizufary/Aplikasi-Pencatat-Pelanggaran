<!doctype html>
<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Login</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Boostrap Icon-->
	<link rel="stylesheet" href="assets/modules/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>

	<div id="auth">
					<div id="auth-right">
						<div class="auth-logo">
							<p><img src="assets/images/logosma.png" class="img-fluid"> <br>SMAN 3 Kota Tangerang Selatan</p>
						</div>
						<h1 class="auth-title">Login</h1>
						<p class="auth-subtitle mb-5">Selamat datang di web raport SMAN 3 Kota Tangerang Selatan</p>


						<form action="/login-proses" method="post">
							@csrf
							@method('PUT')
							<div class="">
								<input type="text" name="username" class="form-control form-control-xl" placeholder="Username">
								<div class="form-control-icon">
									<i class="bi bi-person"></i>
								</div>
								@if ($errors->has('username'))
								<span class="text-danger">{{ $errors->first('username') }}</span>
								@endif
							</div>
							<div class="">
								<input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
								<div class="form-control-icon">
									<i class="bi bi-shield-lock"></i>
								</div>
								@if ($errors->has('password'))
								<span class="text-danger">{{ $errors->first('password') }}</span>
								@endif
							</div>
							<button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
						</form>
					</div>
		</div>
	</div>



	<!-- General JS Scripts -->
	<script src="assets/js/atrana.js"></script>

	<!-- JS Libraies -->
	<script src="assets/modules/jquery/jquery.min.js"></script>
	<script src="assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="assets/modules/popper/popper.min.js"></script>

	<!-- Template JS File -->
	<script src="assets/js/script.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>
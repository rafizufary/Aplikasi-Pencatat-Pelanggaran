<!doctype html>
<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>{{$title}}</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="{{url('assets/modules/bootstrap-5.1.3/css/bootstrap.css')}}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="{{url('assets/modules/fontawesome6.1.1/css/all.css')}}">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="{{url('assets/modules/boxicons/css/boxicons.min.css')}}">
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
</head>

<body>

	<!--Topbar -->
	<div class="topbar transition">
			<div class="menu">
				<ul>
					<li class="nav-item dropdown">
						<a class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
							<img src="{{url('assets/images/user.png')}}" alt="">
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<hr class="dropdown-divider">
							<a class="dropdown-item" href="/signout"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span style="color: white">Logout</span></a>
						</ul>
					</li>
				</ul>
			</div>
	</div>


	<!--Sidebar-->
	<div class="sidebar">
		<div class="sidebar-content">
			<div id="sidebar">

				<!-- Logo -->
				<div class="logo">
					<h2 class="w-100 p-3 fs-5"><img class="w-auto p-1" src="{{url('assets/images/logosma.png')}}">SMAN 3 TANGSEL</h2>
				</div>

				<ul class="side-menu">
					<li>
						<a href="dashboard_user" class="nav-link {{ ($title === "Dashboard") ? 'active' : ''	}}">
							<i class='bx bxs-dashboard icon'></i> Dashboard
						</a>
					</li>
					<li>
						<a href="lihatrapor" class="nav-link {{ ($title === "Raport") ? 'active' : ''	}}">
							<i class='bx bxs-file icon'></i> Rapor
						</a>
					</li>
					<li>
						<a href="updatepass" class="nav-link {{ ($title === "Update Password") ? 'active' : ''	}}">
							<i class='bx bxs-book icon'></i> Update Password
						</a>
					</li>


				</ul>

			</div>

		</div>
	</div>
	</div><!-- End Sidebar-->


	<div class="sidebar-overlay"></div>


	@yield('konten_user')


	<!-- Preloader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<!-- Loader -->
	<div class="loader-overlay"></div>

	<!-- General JS Scripts -->
	<script src="{{url('assets/js/atrana.js')}}"></script>

	<!-- JS Libraies -->
	<script src="{{url('assets/modules/jquery/jquery.min.js')}}"></script>
	<script src="{{url('assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{url('assets/modules/popper/popper.min.js')}}"></script>

	<!-- Template JS File -->
	<script src="{{url('assets/js/script.js')}}"></script>
	<script src="{{url('assets/js/custom.js')}}"></script>

	@yield('js')

</body>

</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>KPU Quick Count</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="./css/chartjs/Chart.min.css">
		<!-- <link rel="stylesheet" type="text/css" href="./js/alertifyjs/css/alertify.min.css"> -->
		<!-- <link rel="stylesheet" type="text/css" href="./js/alertifyjs/css/themes/bootstrap.min.css"> -->

		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-purple sticky-top">
			<div class="container">
				<a class="navbar-brand"><img src="./img/kpu-ump.png"></a>
				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
				<i class="fa fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="exCollapsingNavbar2">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php"><span class="nav-icon"><i class="fa fa-home"></i></span>Beranda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="cek.php"><span class="nav-icon"><i class="fa fa-user"></i></span>Cek Data</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="count.php"><span class="nav-icon"><i class="fa fa-pie-chart"></i></span>Quick Count</a>
						</li>
						<li class="nav-item nav-item-right">
							<a class="nav-link" href="login.php"><span class="nav-icon"><i class="fa  fa-sign-in"></i></span>Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>



		<!-- .content -->
		<section class="content py-5">
			<div class="container">
				<div class="content-title text-center pb-4">
					<h1 class="h3">Quick Count </h1>
				</div>
				<div class="counting">
					<div class="counting-title d-none">
						<h2 class="h4">Counting</h2>
					</div>
					<hr/>
					<div class="notif"></div>
					<div class="row justify-content-center">
						<div class="col-md-4 mb-3 mb-lg-0">
							<div class="card">
								<div class="card-body">
									<canvas id="chartpie" width="500" height="500"></canvas>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-header bg-white">
									<h2 class="h5 mb-0">Activity</h2>
								</div>
								<div class="card-body">
									<ul class="list-unstyled log small mb-0" id="log">

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- end .content -->

		<!-- .footer -->
		<footer class="footer py-3">
			<div class="container">
				<small>&copy; 2020 <b>RexaDev</b>, Build with <i class="fa fa-heart text-danger"></i> in localhost</small>
			</div>
		</footer> <!-- end .footer -->


		<script src="./js/jquery/jquery.min.js"></script>
		<script src="./js/popper/popper.min.js"></script>
		<script src="./js/bootstrap/bootstrap.min.js"></script>
		<script src="./js/chartjs/Chart.min.js"></script>
		<script src="./js/notify/notify.min.js"></script>
		<!-- <script src="./js/alertifyjs/alertify.min.js"></script> -->

		<script src="./js/script.js"></script>
		<script type="text/javascript">
			createChart()
		</script>
	</body>
</html>
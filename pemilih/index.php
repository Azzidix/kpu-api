<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>KPU Quick Count</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/chartjs/Chart.min.css">
		<link rel="icon" href="../img/kpu-ump.png">
		<!-- <link rel="stylesheet" type="text/css" href="./js/alertifyjs/css/alertify.min.css"> -->
		<!-- <link rel="stylesheet" type="text/css" href="./js/alertifyjs/css/themes/bootstrap.min.css"> -->

		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-purple sticky-top">
			<div class="container">
				<a class="navbar-brand"><img src="../img/kpu-ump.png"></a>
				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
				<i class="fa fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="exCollapsingNavbar2">
					<ul class="nav navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="../pemilih/index.php"><span class="nav-icon"><i class="fa fa-home"></i></span>Dashboard</a>
						</li>
						<li class="nav-item nav-item-right">
							<a class="nav-link" href="../login.php"><span class="nav-icon"><i class="fa  fa-sign-in"></i></span>Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- .content -->
		<section class="content py-5">
			<div class="container">
				<div class="content-title text-center pb-4">
					<h1 class="h3" id="txtTitle">Gunakan Hak Pilihmu!</h1>
					<div class="alert alert-warning d-none" role="alert">
						<i class="fa fa-ban"></i> Pemilihan suara belum ada.
					</div>
					<div class="alert alert-warning d-none" role="alert">
						<i class="fa fa-ban"></i> Anda belum terdaftar sebagai pemilih.
					</div>
					<div class="alert alert-success d-none" role="alert">
						<i class="fa fa-check-circle"></i> Anda sudah melakukan melakukan pemilihan.
					</div>
				</div>
				<div class="vote">
					<div class="row justify-content-center" id="candidate">
						<div class="col-sm-6 col-md-4 col-lg-4 mb-3">
							<div class="card">
								<div class="card-image p-3">
									<span class="number">1</span>
									<img src="../img/bman.png" class="img-fluid">
								</div>
								<div class="card-footer text-center">
									<ul class="list-unstyled mb-0">
										<li class="font-weight-bold mb-2">Calon 1</li>
										<li class="text-muted votecount mb-2">0 Suara</li>
										<li class="font-weight-bold mb-2">Visi & Misi</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
									</ul>
								</div>
								<div class="card-footer bg-white text-center">
									<button class="btn btn-purple btnvote">Vote</button>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-lg-4 mb-3">
							<div class="card">
								<div class="card-image p-3">
									<span class="number">2</span>
									<img src="../img/boy.png" class="img-fluid">
								</div>
								<div class="card-footer text-center">
									<ul class="list-unstyled mb-0">
										<li class="font-weight-bold mb-2">Calon 2</li>
										<li class="text-muted votecount mb-2">0 Suara</li>
										<li class="font-weight-bold mb-2">Visi & Misi</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
									</ul>
								</div>
								<div class="card-footer bg-white text-center">
									<button class="btn btn-purple btnvote">Vote</button>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-lg-4">
							<div class="card">
								<div class="card-image p-3">
									<span class="number">3</span>
									<img src="../img/worker.png" class="img-fluid">
								</div>
								<div class="card-footer text-center">
									<ul class="list-unstyled mb-0">
										<li class="font-weight-bold mb-2">Calon 3</li>
										<li class="text-muted votecount mb-2">0 Suara</li>
										<li class="font-weight-bold mb-2">Visi & Misi</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
									</ul>
								</div>
								<div class="card-footer bg-white text-center">
									<button class="btn btn-purple btnvote">Vote</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- end .content -->

		<!-- .footer -->
		<footer class="footer py-3 text-center">
			<div class="container">
				<small>&copy; 2020 <b>RexaDev</b>, Build with <i class="fa fa-heart text-danger"></i> in localhost</small>
			</div>
		</footer> <!-- end .footer -->


		<script src="../js/jquery/jquery.min.js"></script>
		<script src="../js/popper/popper.min.js"></script>
		<script src="../js/bootstrap/bootstrap.min.js"></script>
		<script src="../js/chartjs/Chart.min.js"></script>
		<script src="../js/notify/notify.min.js"></script>
		<!-- <script src="./js/alertifyjs/alertify.min.js"></script> -->

		<script src="./js/script.js"></script>
		<script type="text/javascript">
			$('.btnvote').on('click', () => {
				alert('Terimakasih anda sudah menggunakan hak pilihmu.');

				$('#candidate').addClass('d-none');
				$('#txtTitle').addClass('d-none');
				$('.alert.alert-success').removeClass('d-none');
			})
		</script>
	</body>
</html>
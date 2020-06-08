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
						<li class="nav-item">
							<a class="nav-link" href="../admin/index.php"><span class="nav-icon"><i class="fa fa-home"></i></span>Dashboard</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../admin/data-pemilihan.php"><span class="nav-icon"><i class="fa fa-check"></i></span>Data Pemilihan</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="../admin/data-pemilih.php"><span class="nav-icon"><i class="fa fa-users"></i></span>Data Pemilih</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../admin/data-suara.php"><span class="nav-icon"><i class="fa fa-user"></i></span>Data Suara</a>
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
					<h1 class="h3">Data Pemilih</h1>
				</div>
				<div class="data-pemilih">
					<div class="card">
						<div class="card-body">
							<div class="option row mb-3">
								<div class="col-md-3">
									<select class="form-control">
										<option selected disabled value="">Pilih Prodi</option>
										<option value="">Teknik Informatika</option>
										<option value="">Teknik Sipil</option>
										<option value="">Teknik Kimia</option>
										<option value="">Farmasi</option>
									</select>
								</div>
								<div class="col-md-3">
									<select class="form-control">
										<option selected disabled value="">Pilih Angkatan</option>
										<option value="">2017</option>
										<option value="">2018</option>
										<option value="">2019</option>
										<option value="">2020</option>
									</select>
								</div>
								<div class="col-md-3">
									<button class="btn btn-purple">Proses</button>
								</div>
							</div>
							<table class="table table-striped table-inverse table-hover table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nama</th>
										<th>Prodi</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>170-------</td>
										<td>Bianca Angelica</td>
										<td>Teknik Informatika</td>
										<td>
											<span class="badge badge-success"><i class="fa fa-check-circle"></i> Aktif</span>
											<span class="badge badge-danger"><i class="fa fa-ban"></i> Tidak Aktif</span>
											<span class="badge badge-warning"><i class="fa fa-user"></i> Alumni</span>
										</td>
									</tr>
								</tbody>
							</table>
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


		<script src="../js/jquery/jquery.min.js"></script>
		<script src="../js/popper/popper.min.js"></script>
		<script src="../js/bootstrap/bootstrap.min.js"></script>
		<script src="../js/chartjs/Chart.min.js"></script>
		<script src="../js/notify/notify.min.js"></script>
		<!-- <script src="./js/alertifyjs/alertify.min.js"></script> -->

		<script src="./js/script.js"></script>
	</body>
</html>
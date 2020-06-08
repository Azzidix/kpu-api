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
						<li class="nav-item active">
							<a class="nav-link" href="cek.php"><span class="nav-icon"><i class="fa fa-user"></i></span>Cek Data</a>
						</li>
						<li class="nav-item">
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
				<div class="content-title text-center pb-5">
				</div>
				<div class="cekdata">
					<div class="col-md-6 mx-auto">
						<div class="card">
							<div class="card-header bg-purple text-center">
								<h2 class="h5 mb-0"><i class="fa fa-check"></i> Cek Data</h2>
							</div>
							<div class="card-body">
								<form action="#" id="formCheck">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-append">
												<span class="input-group-text"><i class="fa fa-user"></i></span>
											</div>
											<input class="form-control" type="text" name="nama" placeholder="Nama" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-append">
												<span class="input-group-text"><i class="fa fa-user"></i></span>
											</div>
											<input class="form-control" type="text" name="nim" placeholder="Nim" required>
										</div>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" id="blankCheckbox" value="option1">
											Suggest Nama
										</label>
									</div>
									<div class="form-group mb-0">
										<small>
											<b>Test Data</b> <br/>
											Adrianto - 170304001 (terdaftar) <br/>
											Yusuf - 170304002 (belum terdaftar)
										</small>
									</div>
									<button type="submit" class="btn btn-purple btn-right" id="btnCari"><i class="fa fa-search"></i>Cari</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-6 mt-3 mx-auto d-none" id="boxResult">
						<div class="card">
							<div class="card-header bg-purple text-center">
								<h2 class="h5 mb-0">Hasil</h2>
							</div>
							<div class="card-body">
								<div class="alert alert-success mb-0" role="alert">
									<p class="mb-0"><i class="fa fa-check"></i> Anda sudah terdaftar sebagai pemilih.</p>
								</div>
								<div class="alert alert-danger d-none" role="alert">
									<p class="mb-0"><i class="fa fa-ban"></i> Anda belum terdaftar sebagai pemilih.</p>
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
				<small>&copy; 2020 <b>Rexa Byte Dev</b>, Build with <i class="fa fa-heart text-danger"></i> in localhost</small>
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
			var nama = '', nim = '';
			$('input[name="nama"]').on('keyup', (e) => {
				nama = $(e.target).val();
			});
			$('input[name="nim"]').on('keyup', (e) => {
				nim = $(e.target).val();
			});

			function checkData() {
				
			}

			$('#formCheck').on('submit', (e) => {
				e.preventDefault();
				$('#boxResult').addClass('d-none');
				var dpemilih = ['170304001'];
				if ($(e.target).has('btnCari')) {
				    // $(e.target).find('i').addClass('fa-search');
				    // $(e.target).find('i').removeClass('fa-search');

				    if ($(e.target).find('#btnCari i').hasClass('fa-search')) {
				        $(e.target).find('#btnCari i').removeClass('fa-search');
				        $(e.target).find('#btnCari i').addClass('fa-spinner fa-spin');
				    } else {
				        $(e.target).find('#btnCari i').removeClass('fa-spinner fa-spin');
				        $(e.target).find('#btnCari i').addClass('fa-search');
				    }
				    setTimeout(() => {
				        $(e.target).find('#btnCari i').removeClass('fa-spinner fa-spin');
				        $(e.target).find('#btnCari i').addClass('fa-search');
				        
				        if (!dpemilih.includes(nim)) {
				        	console.log(nim)
							$('.alert.alert-success').addClass('d-none');
							$('.alert.alert-danger').removeClass('d-none');
						}
						$('#boxResult').removeClass('d-none');
				    }, 1000);
				}			    
			});

		</script>
	</body>
</html>
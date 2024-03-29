<?php
session_start();
require_once("config/koneksidb.php");
require_once("config/config.php");
security_login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ASE Distro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" href="assets/styles.css" />
</head>

<body>
	<!-- navbar -->
	<nav class="navbar fixed-top navbar-light bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand text-white">Navbar</a>
			<form class="d-flex">
				<input class="form-control me-2" type="text" readonly value="<?= $_SESSION['namauser_log']; ?>">
				<a href="admin/logout.php" class="btn btn-warning text-white me-2"> Logout</a>
				<a href="admin/home.php" class="btn btn-warning text-white"> Admin</a>
			</form>
		</div>
	</nav>
	<!-- header banner -->
	<section id="header">
		<div class="container ps-0">
			<img src="assets/img/banner.jpg" class="banner" />
			<div class="judulbanner">
				<span class="subtitle1">BERSAMA.NET</span> <br />
				<span class="subtitle2">Yuk NgeWarnet</span>
			</div>
		</div>
	</section>
	<!-- konten -->
	<section id="konten ">
		<?php 
			if(isset($_GET['page'])){
				include_once("".$_GET['page'].".php");
			}
			else{
				include_once("home.php");
			}
		 ?>
	</section>
	<!-- footer -->
	<section id="footer" class="bg-primary text-white">
		<div class="container pt-4">
			<div class="row">
				<div class="col-md-4">
					<address class="fw-bold mb-0">ASE's Distro :</address>
					<p class="mb-0">Jalan Merdeka No.101 , Manyar Surabaya</p>
					<p>WA : 081-3393-64971</p>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<address class="fw-bold">Follow us :</address>
					<p>
						<span class="pe-3">@anidistro</span>
						<span class="pe-3">@anidistro</span>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form class="bg-light p-5" action="ceklogin.php" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Form Login</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-4">
							<label for="username" class="form-label">Username</label>
							<input type="text" name="username" class="form-control" id="logusername" />
						</div>
						<div class="mb-4">
							<label for="password" class="form-label">Password</label>
							<input type="password" name="password" class="form-control" id="logpassword" />
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" id="btnbatal" class="btn btn-secondary"
							data-bs-dismiss="modal">Batal</button>
						<button type="submit" name="btnlogin" id="btnkeluar" class="btn btn-primary">Login</button>
					</div>
					<div class="row mb-3">
						<div class="col-md-5 text-end">
							<a href="?page=lupapassword" class="btn btn-primary">Lupa Password?</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!-- js -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="assets/proses.js"></script>
	<script src="assets/js/sulthan.js"></script>
</body>

</html>
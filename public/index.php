<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Shop</title>
	<!-- fonts google 'Ubuntu' -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
	<!-- custom css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- bootstrap 5.2 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- icon bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
	<!-- Scroll to Top -->
	<i class="bi bi-arrow-up-circle-fill" value="Scroll Top" id="tombolScrollTop" onclick="scrolltotop()"></i>
	<!-- header -->
	<nav class="navbar navbar-expand-lg bg-navbar p-0">
		<div class="container">
			<a class="navbar-brand fw-semibold text-white" href="#home">My-Shop</a>
			<button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				Menu <i class="bi bi-list"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav animasi ms-auto p-0" id="menu">
					<li class="nav-item p-3">
						<a class="nav-link text-white" aria-current="page" href="#koleksi">Koleksi</a>
					</li>
					<li class="nav-item p-3">
						<a class="nav-link text-white" href="#terlaris">Terlaris</a>
					</li>
					<li class="nav-item p-3">
						<a class="nav-link text-white" href="#">Kontak</a>
					</li>
					<li class="p-3">
						<a class="btn btn-outline-secondary px-4 text-white" href="#">Join</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<section id="home">
		<div class="container py-5 my-5">
			<div class="row align-items-md-stretch">
				<div class="col-md-6">
					<div class="h-100 p-5 rounded-3 d-flex flex-column align-items-center">
						<h2>Mulai belanja disini</h2>
						<p class="text-center">Pakaian harian yang nyaman dan elegan. Menerima permintaan design sesuai keinginan. Dapatkan pakaian yang anda inginkan dengan mudah disini.</p>
						<button class="btn btn-outline-secondary px-5" type="button">Jelajahi</button>
					</div>
				</div>
				<div class=" col-md-6">
					<img class="img-fluid" src="assets/img/shoping-icon.png" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="bg-navbar" id="koleksi">
		<div class="container py-5 my-5">
			<input class="mb-3 w-100" type="search" name="" id="" placeholder="Cari">
			<div class="d-flex">
				<select class="form-select select-filter me-1" id="filter" aria-label=" example" aria-placeholder="Filter">
					<option value="" disabled selected hidden>Filter</option>
					<option value="termurah">Termurah</option>
					<option value="termahal">Termahal</option>
					<option value="terlaris">Terlaris</option>
				</select>
				<i class="bi bi-filter bi-2 text-white" for="filter"></i>
			</div>
			<div class="row mt-3 justify-content-center">
				<?php for ($i = 0; $i <= 10; $i++) : ?>
					<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
						<div class="card w-100">
							<img src="assets/img/baju.jpg" class="card-img-top img-fluid" alt="...">
							<div class="card-body">
								<h3 class="card-title">Baju</h3>
								<div class="row">
									<div class="col"><span class="badge text-bg-primary p-1">Rp 35.000,-</span></div>
									<div class="col text-end">
										<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
									</div>
								</div>
								<p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quo eveniet, doloribus iusto id aperiam.</p>
								<hr>
								<div class="row">
									<div class="col-auto">
										<a href="#" class="btn btn-danger btn-sm">Masukan Keranjang</a>
									</div>
									<div class="col text-end">
										<a href="#" class="btn btn-primary btn-sm">Beli</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</section>

	<section id="terlaris"></section>
	<!-- jquery 3.6.0 -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<!-- script bootstrap 5.2 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$(window).scroll(function() {
				if ($(window).scrollTop() > 100) {
					$('#tombolScrollTop').fadeIn();
				} else {
					$('#tombolScrollTop').fadeOut();
				}
			});
		});

		function scrolltotop() {
			$('html, body').animate({
				scrollTop: 0
			}, 500);
		}
	</script>
</body>

</html>
<?php
session_start();
require 'adminacc/koneksi.php';
date_default_timezone_set("Asia/Jakarta");
$date_now = date("Y-m-d");

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PT CSR</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>


<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<img src="img/logo.jpeg" alt="Logo" class="img-logo">
			<h1 class="h6 text-success"><b>PT CISADANE SAWIT RAYA</b></h1>
		</header>

		<!-- Nav -->
		<nav id="nav">
			<ul>
				<li><a href="#intro" class="active">Home</a></li>
				<li><a href="#first">Keuntungan</a></li>
				<li><a href="#second">Pekerjaan</a></li>
				<li><a href="#cta">Admin</a></li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">

			<!-- Introduction -->
			<section id="intro" class="main">
				<div class="spotlight">
					<div class="content">
						<header class="major">
							<h2>Home</h2>
						</header>
						<p>Selamat datang di situs web PT CSR. Kami berkomitmen untuk menyediakan lapangan pekerjaan bagi semua orang <br>
							yang ingin bergabung bersama kami. Kami akan terus berusaha menjadi mitra yang dapat diandalkan seiring dengan pertumbuhan dan perluasan bisnis kami mendatang.</p>
					</div>
					<img src="img/pekerja.jpeg" class="landing" />
				</div>
			</section>

			<!-- First Section -->
			<section id="first" class="main special">
				<header class="major">
					<h2>Keuntungan</h2>
				</header>
				<ul class="features">
					<li>
						<span><img src="img/know.png"></span>
						<h3>Knowledge</h3>
						<p>Pelatihan oleh mentor yang ahli di bidangnya</p>
					</li>
					<li>
						<span><img src="img/ex.png"></span>
						<h3>Experience</h3>
						<p>Menambah keterampilan dan pendalaman materi</p>
					</li>
					<li>
						<span><img src="img/c.png"></span>
						<h3>Character</h3>
						<p>Pembentukan karakter kerja dengan gaya industri modern</p>
					</li>
				</ul>
			</section>

			<!-- Second Section -->
			<section id="second" class="main special">
				<header class="major">
					<h2><strong>Job Tersedia</strong></h2>
				</header>
				<div class="table-wrapper">
					<table class="alt">
						<thead>
							<tr>
								<th>Posisi Tersedia</th>
								<th>Periode</th>
								<th>Deadline Pendaftaran</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$getdata = mysqli_query($conn, "select * from job where registerend>'$date_now'");
							while ($data = mysqli_fetch_array($getdata)) {
								$idjob = $data['id'];
								$namajob = $data['jobname'];
								$descjob = $data['jobdesc'];
								$mulai = date_format(date_create($data['jobstart']), "d M Y");
								$selesai = date_format(date_create($data['jobend']), "d M Y");
								$periode = $mulai . " - " . $selesai;
								$deadline = date_format(date_create($data['registerend']), "d M Y");
								$jobloc = $data['jobloc'];
								$workingtype = $data['workingtype'];
							?>

								<tr>

									<td><?= $namajob; ?></td>
									<td><?= $periode; ?></td>
									<td><?= $deadline; ?></td>
									<td><a href="apply.php?id=<?= $idjob; ?>" class="btn btn-success">Apply</a></td>
								</tr>

							<?php
							};

							?>
						</tbody>
					</table>
				</div>
			</section>

			<!-- Get Started -->
			<section id="cta" class="main special">
				<header class="major">
					<h2>Administrator</h2>
				</header>
				<footer class="major">
					<ul class="actions special">
						<li><a href="login.php" class="btn btn-success">Login</a></li>
					</ul>
				</footer>
			</section>

		</div>

		<!-- Footer -->
		<footer id="footer">
			<p class="copyright">Sunita tasya gultom<br>222510087<br>4TIC</p>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
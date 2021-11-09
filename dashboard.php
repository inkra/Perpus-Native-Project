<?php
       include "../static/koneksi.php";
    ?>

<?php
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: ../static/Login/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Dashboard Perpus</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Perpus Native</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Fitur
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.html">
              <i class="fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					 <li class="sidebar-item">
                        <a class="sidebar-link" href="histori_peminjaman.php">
              <i class="fas fa-fw fa-history"></i> <span class="align-middle">Transaksi</span>
            </a>
                    </li>


			
					<li class="sidebar-header">
						Data Perpus
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="siswa.php">
              <i class="fas fa-fw fa-user-graduate"></i> <span class="align-middle">Siswa</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
              <i class="fas fa-fw fa-school"></i> <span class="align-middle">Kelas</span>
            </a>

					<li class="sidebar-item">
						<a class="sidebar-link" href="buku.php">
              <i class="fas fa-fw fa-book"></i> <span class="align-middle">Buku</span>
            </a>
					</li>

					<li class="sidebar-header">
						Account Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="logout.php">
              <i class="fas fa-sign-out-alt"></i> <span class="align-middle">Logout</span>
            </a>
					</li>

				</ul>

			</div>
		</nav>
		<div class="main">
			

			<!--main konten-->
			<main class="content">
				<div class="container-fluid p-0">

					<h2 class="mb-1">Selamat datang <?=$_SESSION['nama_siswa']?> di website Perpus Native.</h2>
					<br>


					 <div class="col-12 mt-4">
          <div class="card mb-4">
            <div class="card-header pb-0 p-0">
            </div>
              <div class="row">
                <div class="col-xl-0 col-md-0 mb-xl-0 mb-0">
                  <div class="card card-blog card-plain" style="padding: 20px;">
                  	<h3 class="mb-1" style="font-weight:bold;">Buku Perpus</h3>
              			<p class="text-sm" style="font-size: 14px; opacity: 70%">Today a reader, tomorrow a leader. Happy reading :3</p>
                    <div class="position-relative">
                    </div>
                    <div class="card-body px- pb-0">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="avatar-group mt-2"> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

        <?php
    include "koneksi.php";
    $qry_buku=mysqli_query($conn,"select * from buku");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
?>

        <div class="col-md-3">
        <div class="card" >
        <img <img src="assets/foto_produk/<?=$dt_buku['foto']?>" class="card-img-top">
        <div class="card-body">
        <h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>
        <p class="card-text"><?=substr($dt_buku['deskripsi'],0,150)?></p>
        <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-dark">Pinjam Buku</a>
        </div>
        </div>
        </div>
        <?php
        }
        ?>
        </div>





			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>Perpus Native</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Inkra Andini</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">XI RPL 1 - 12</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>


	<script src="js/app.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span class=\"fas fa-chevron-left\" title=\"Previous month\"></span>",
				nextArrow: "<span class=\"fas fa-chevron-right\" title=\"Next month\"></span>",
			});
		});
	</script>

</body>

</html>
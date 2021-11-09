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

	<title>Buku</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="dashboard.php">
          <span class="align-middle">Perpus Native</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Fitur
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="dashboard.php">
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
						<a class="sidebar-link" href="tambah_kelas.php">
              <i class="fas fa-fw fa-school"></i> <span class="align-middle">Tambah Kelas</span>
            </a>

					<li class="sidebar-item active">
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

					<h1 class="h3 mb-3">Buku</h1>

					<div class="col-15 col-xl-12">
							<div class="card">
								<div class="card-header">
									<a href="tambah_buku.php"><button type="button" class="btn btn-primary btn-lg">Tambah Buku</button></a>
								</div>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th style="width:8%;">No</th>
											<th style="width:18%;">Nama Buku</th>
											<th style="width:30%">Deskripsi</th>
											<th style="width:25%">Foto Buku</th>
											<th style="width:40%;">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
                      include "koneksi.php";
                      $qry_buku=mysqli_query($conn,"select * from buku");
                      $no=0;
                      while($data_buku=mysqli_fetch_array($qry_buku)){
                      $no++;?>
                      <tr class="text-xs font-weight-bold">
                          <td class="align-middle text-left"><?=$no?></td>
                          <td class="align-middle text-left"><?=$data_buku['nama_buku']?></td>
                          <td class="align-middle text-left"><?=$data_buku['deskripsi']?></td>
                          <td style="text-align: center;"><img src="assets/foto_produk/<?=$data_buku['foto']?>" width="100px";></td>
                          <td class="text-xs font-weight-bold">
                          <a class="btn btn-success" href="ubah_buku.php?id_buku=<?=$data_buku['id_buku']?>" >Ubah</a>
                          <a href="hapus_buku.php?id_buku=<?=$data_buku['id_buku']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                      </tr>
                      <?php
                      }
                      ?>
									</tbody>
								</table>
							</div>
						</div>
				</div>
			</main>



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
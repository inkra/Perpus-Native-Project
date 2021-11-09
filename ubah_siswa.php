<?php
        include "koneksi.php";
        $qry_get_siswa=mysqli_query($conn,"select * from siswa where
        id_siswa = '".$_GET['id_siswa']."'");
        $dt_siswa=mysqli_fetch_array($qry_get_siswa);
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

	<title>Edit Siswa</title>

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
					<li class="sidebar-item active">
						<a class="sidebar-link" href="siswa.php">
              <i class="fas fa-fw fa-user-graduate"></i> <span class="align-middle">Siswa</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="tambah_kelas.php">
              <i class="fas fa-fw fa-school"></i> <span class="align-middle">Tambah Kelas</span>
            </a>

					<li class="sidebar-item">
						<a class="sidebar-link" href="tables-bootstrap.html">
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

					<h1 class="h3 mb-3">Edit Siswa</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">

						    <form action="proses_ubah_siswa.php" method="post">
						    <input type="hidden" name="id_siswa" value="<?=$dt_siswa['id_siswa']?>">
						    <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Nama siswa</label>
                   <input type="text" name="nama_siswa" value="<?=$dt_siswa['nama_siswa']?>" class="form-control">
                </div>
						    <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                   <input type="date" name="tanggal_lahir" value="<?=$dt_siswa['tanggal_lahir']?>" class="form-control">
                </div>
						    <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Gender</label>
                   <?php
						        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
							    ?>
							    <select name="gender" class="form-control">
							    <option></option>
							    <?php foreach ($arr_gender as $key_gender => $val_gender):
						        if($key_gender==$dt_siswa['gender']){
						            $selek="selected";
						        } else {
						            $selek="";
						        }
						    ?>
						    <option value="<?=$key_gender?>"
						    <?=$selek?>><?=$val_gender?></option>
						    <?php endforeach ?>
						    </select>
                </div>
						    <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Alamat</label>
                   <input type="textarea" name="alamat" value="<?=$dt_siswa['alamat']?>" class="form-control">
                </div>
						    Kelas :
						    <select name="id_kelas" class="form-control">

						    <option></option>
						    <?php
						    include "koneksi.php";
						    $qry_kelas=mysqli_query($conn,"select * from kelas");
						    while($data_kelas=mysqli_fetch_array($qry_kelas)){
						    if($data_kelas['id_kelas']==$dt_siswa['id_kelas']){
						    $selek="selected";
						    } else {
						    $selek="";
						    }
						    echo '<option value="'.$data_kelas['id_kelas'].'"
						    '.$selek.'>'.$data_kelas['nama_kelas'].'</option>';
						    }
						    ?>
						    </select>
						    <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Username</label>
                   <input type="text" name="username" value="<?=$dt_siswa['username']?>" class="form-control">
                </div>
						    <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Password</label>
                   <input type="password" name="password" value="" class="form-control">
                </div>
						  
						    <input type="submit" name="simpan" value="Ubah Siswa"
						    class="btn btn-primary">
						    <a href="siswa.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
						    </form>
								</div>
								<div class="card-body">
								</div>
							</div>
						</div>
					</div>

			 

				</div>
			</main>




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
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
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
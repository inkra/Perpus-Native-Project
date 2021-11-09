<?php
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
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

                    <h1 class="h3 mb-3">Daftar Keranjang</h1>

                    <div class="container-fluid py-4">
            <div class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-header pb-0">

           <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-borderless">
                  <thead>
                    <tr class="text-xs font-weight-bold opacity-6">
                      <th>No</th>
                      <th class="align-middle text-left">Jumlah Buku</th>
                      <th class="align-middle text-left">Jumlah</th>
                      <th class="align-middle text-left">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
                    <tr>
                        <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_buku']?></td><td><?=$val_produk['qty']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
                <a href="checkout.php"><button type="button" class="btn btn-lg btn-primary" disabled>Checkout</button></a>
                <a href="dashboard.php"><button type="button" class="btn btn-secondary btn-lg" disabled>Kembali</button></a>
              </div>
            </div>
          </div>
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
<?php
    include "koneksi.php";
    if($_POST){
        $id_buku=$_POST['id_buku'];
        $nama_buku=$_POST['nama_buku'];
        $deskripsi=$_POST['deskripsi'];
        //upload foto
        $ekstensi = array('png','jpg','jpeg');
        $namafile = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];
        $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
        $ukuran = $_FILES['file']['size'];  

            if(empty($nama_buku)){
                echo "<script>alert('nama buku tidak boleh kosong');location.href='tampil_buku.php';</script>";
            } else {
                // if (!in_array($tipe_file, $ekstensi)) {
                //     header("location:ubah_produk.php?alert=gagal_ektensi");
                // } else {
                    if($ukuran < 1044070){          
                        move_uploaded_file($tmp, 'assets/foto_produk/'.$namafile);
                        $update=mysqli_query($conn,"update buku set nama_buku='".$nama_buku."',deskripsi='".$deskripsi."', foto='".$namafile."',id_buku='".$id_buku."' where id_buku= '".$id_buku."'") or die(mysqli_error($conn));
                        if($update){
                            echo "<script>alert('Sukses update buku');location.href='buku.php';</script>";
                        } else {
                            echo "<script>alert('Gagal update buku');location.href='ubah_buku.php?id_buku=".$id_buku."';</script>";
                        }
                }else{
                    echo "<script>alert('Ukuran Terlalu Besar');location.href='ubah_buku.php';</script>";
                }
            }
         }
?>
<?php
//koneksi data ke database agar masuk
include "koneksi.php";

//meangkap data dari form tambah.php
$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];
$jam = $_POST['jam'];
$tipe_cleaning = $_POST['tipe_cleaning'];
$pembayaran = $_POST['pembayaran'];

$query = "UPDATE datajasacleaning SET nama='$nama', tanggal='$tanggal', nomor_telepon='$nomor_telepon', alamat='$alamat', jam='$jam', tipe_cleaning='$tipe_cleaning', pembayaran='$pembayaran'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
// periksa query apakah ada error
if(!$query){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
} else {
    //tampil alert dan akan redirect ke halaman index.php
    echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
}
?>
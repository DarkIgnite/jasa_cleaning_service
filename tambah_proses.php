<?php
//koneksi data ke database agar masuk
include "koneksi.php";

//meangkap data dari form tambah.php
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];
$jam = $_POST['jam'];
$tipe_cleaning = $_POST['tipe_cleaning'];
$pembayaran = $_POST['pembayaran'];

$query = "INSERT INTO datajasacleaning (nama, tanggal, nomor_telepon, alamat, jam, tipe_cleaning, pembayaran) VALUES ('$nama', '$tanggal', '$nomor_telepon', '$alamat', '$jam', '$tipe_cleaning', '$pembayaran')";
$result = mysqli_query($koneksi, $query);
// periksa query apakah ada error
if(!$query){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
} else {
    //tampil alert dan akan redirect ke halaman index.php
    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
}
?>
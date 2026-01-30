<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data</title>
</head>
<body>
    <h1>Halaman Edit Data</h1>
    <br>
    <a href="index.php">Kembali ke Halaman Utama</a>
    <?php
        include 'koneksi.php';

        //menangkap id yang di kirim dari halaman index.php
        $id = $_GET['id'];
        //mengambil data siswa berdasarkan id yang di kirim
        $data = mysqli_query($koneksi, "SELECT * FROM datajasacleaning WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){
    ?>
    <form method="POST" action="edit_proses.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="text" name="nomor_telepon" value="<?php echo $d['nomor_telepon']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td><input type="text" name="jam" value="<?php echo $d['jam']; ?>"></td>
            </tr>
            <tr>
                <td>Tipe Cleaning</td>
                <td><input type="text" name="tipe_cleaning" value="<?php echo $d['tipe_cleaning']; ?>"></td>
            </tr>
            <tr>
                <td>Pembayaran</td>
                <td><input type="text" name="pembayaran" value="<?php echo $d['pembayaran']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Edit"></td>
            </tr>
        </table>
    </form>


    <?php
        }
    ?>
</body>
</html>
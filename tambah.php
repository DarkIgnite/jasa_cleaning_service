<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Data Pemesan</h1>
    <a href="index.php" class="nav-link">← Kembali ke Halaman Utama</a>
    <br>
    <form method="POST" action="tambah_proses.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="text" name="nomor_telepon"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td><input type="time" name="jam"></td>
            </tr>
            <tr>
                <td>Tipe Cleaning</td>
                <td><input type="text" name="tipe_cleaning"></td>
            </tr>
            <tr>
                <td>Pembayaran</td>
                <td><input type="text" name="pembayaran"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="TAMBAH"></td>
            </tr>
        </table>
    </form>
</body>
</html>
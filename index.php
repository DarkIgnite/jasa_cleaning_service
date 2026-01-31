<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Halaman Admin</h1>
    <a href="tambah.php" class="nav-link">+ Tambah Data Pemesan</a>
    <br>
    <table border="1">
        <tr>
            <th>Nomor</th>
            <th>Nama Pemesan</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Tanggal Reservasi</th>
            <th>Jam Reservasi</th>
            <th>Tipe Cleaning</th>
            <th>Pembayaran</th>
            <th>Aksi</th>
        </tr>
        <?php
            $no = 1;
            $datajasacleaning = mysqli_query($koneksi, "SELECT * FROM datajasacleaning ORDER BY id DESC");
            if(mysqli_num_rows($datajasacleaning) > 0){
                while($row = mysqli_fetch_array($datajasacleaning)){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['nomor_telepon'] ?></td>
            <td><?php echo $row['alamat'] ?></td>
            <td><?php echo $row['tanggal'] ?></td>
            <td><?php echo $row['jam'] ?></td>
            <td><?php echo $row['tipe_cleaning'] ?></td>
            <td><?php echo $row['pembayaran'] ?></td>
            <td class="action-links">
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a>
                <a href="hapus.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Yakin ingin hapus data?')">Hapus</a>
            </td>
        </tr>

        <?php }}else{ ?>
        <tr>
            <td colspan="3">Data tidak ada</td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
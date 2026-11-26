<?php

require_once 'koneksi.php';

$sql = "SELECT * FROM buku ORDER BY judul ASC";

$stmt = $pdo->query($sql);

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku Perpustakaan</title>
</head>

<body>

<h2>DAFTAR BUKU PERPUSTAKAAN</h2>

<a href="tambah.php">+ Tambah Buku</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>ISBN</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun Terbit</th>
    <th>Stok</th>
    <th>Status</th>
</tr>


<?php 

$no = 1;

foreach ($data as $buku) {
    $status = $buku['stok']>0 
    ? "Tersedia"
    : "Habis";

?>

<tr>

    <td><?= $no++ ?></td>

    <td><?= htmlspecialchars($buku['isbn']) ?></td>

    <td><?= htmlspecialchars($buku['judul']) ?></td>

    <td><?= htmlspecialchars($buku['penulis']) ?></td>

    <td><?= htmlspecialchars($buku['penerbit']) ?></td>

    <td><?= $buku['tahun_terbit'] ?></td>

    <td><?= $buku['stok'] ?></td>

    <td><?= $status ?></td>

</tr>

<?php } ?>

</table>

</body>
</html>
<?php
require_once 'functions.php';

$error = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $isbn = trim($_POST['isbn']);
    $judul = trim($_POST['judul']);
    $penulis = trim($_POST['penulis']);
    $penerbit = trim($_POST['penerbit']);
    $tahun = trim($_POST['tahun_terbit']);
    $stok = trim($_POST['stok']);

    if ($isbn == "" || !preg_match('/^[0-9]{13}$/', $isbn)) {
        $error['isbn'] = "ISBN harus 13 angka";
    }

    if (strlen($judul) < 3) {
        $error['judul'] = "Judul minimal 3 karakter";
    }

    if ($penulis == "") {
        $error['penulis'] = "Penulis wajib diisi";
    }

    if ($penerbit == "") {
        $error['penerbit'] = "Penerbit wajib diisi";
    }

    if (!preg_match('/^[0-9]{4}$/', $tahun) ||
        $tahun < 1900 || $tahun > date('Y')) {
        $error['tahun_terbit'] = "Tahun tidak valid";
    }

    if (!preg_match('/^[0-9]+$/', $stok)) {
        $error['stok'] = "Stok tidak boleh negatif";
    }
}
?>

<form method="POST">
    ISBN:
    <input type="text" name="isbn">
    <br>

    Judul:
    <input type="text" name="judul">
    <br>

    Penulis:
    <input type="text" name="penulis">
    <br>

    Penerbit:
    <input type="text" name="penerbit">
    <br>

    Tahun:
    <input type="number" name="tahun_terbit">
    <br>

    Stok:
    <input type="number" name="stok">
    <br>

    <button type="submit">Simpan</button>
</form>
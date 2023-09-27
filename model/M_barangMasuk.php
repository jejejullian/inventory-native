<?php
require 'function.php';
require 'cek.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM masuk WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);
} else {
    header('Location: masuk.php');
}

if (isset($_POST['updatebarang'])) {
    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $merk_barang = $_POST['merk_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $harga_barang = $_POST['harga_barang'];
    $penanggung_jawab = $_POST['penanggung_jawab'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $ruangan = $_POST['ruangan'];

    $query = mysqli_query($conn, "UPDATE masuk SET 
        nama_barang='$nama_barang',
        merk_barang='$merk_barang',
        jumlah_barang='$jumlah_barang',
        harga_barang='$harga_barang',
        penanggung_jawab='$penanggung_jawab',
        tanggal_masuk='$tanggal_masuk',
        ruangan='$ruangan'
        WHERE id='$id'
    ");

    if ($query) {
        header('Location: masuk.php');
    } else {
        echo "<script>alert('Terjadi kesalahan dalam mengedit data!')</script>";
    }
}
?>



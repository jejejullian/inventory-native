<?php
session_start();

// Membuat Koneksi Ke Database
function generateKodeBarang()
{
    $prefix = 'ydk-';
    $randomString = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'), 0, 4);
    return $prefix . $randomString;
}

// Membuat koneksi ke database (gantilah parameter koneksi sesuai dengan konfigurasi database Anda)
$conn = mysqli_connect("localhost", "root", "", "inventory");

// Memeriksa jika tombol 'addnewbarang' ditekan
if (isset($_POST['addnewbarang'])) {
    $kodebarang = generateKodeBarang();
    $namabarang = $_POST['nama_barang'];
    $merkbarang = $_POST['merk_barang'];
    $jumlahbarang = $_POST['jumlah_barang'];
    $hargabarang = $_POST['harga_barang'];
    $penanggungjawab = $_POST['penanggung_jawab'];
    $tanggalmasuk = $_POST['tanggal_masuk'];
    $ruangan = $_POST['ruangan'];

    // Menambahkan data ke tabel 'masuk' dalam database
    $addtotable = mysqli_query($conn, "INSERT INTO masuk (kode_barang, nama_barang, merk_barang, jumlah_barang, harga_barang, penanggung_jawab, tanggal_masuk, ruangan) VALUES ('$kodebarang', '$namabarang', '$merkbarang', '$jumlahbarang', '$hargabarang', '$penanggungjawab', '$tanggalmasuk', '$ruangan')");
    if ($addtotable) {
        header('location: masuk.php');
    } else {
        echo 'gagal';
        header('location: masuk.php');
    }
}

// Memeriksa jika tombol 'addnewadmin' ditekan
if (isset($_POST['addnewadmin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menambahkan data ke tabel 'login' dalam database
    $addtotable = mysqli_query($conn, "INSERT INTO login (username, password) VALUES ('$username', '$password')");
    if ($addtotable) {
        header('location: kelola_admin.php');
    } else {
        echo 'gagal';
        header('location: kelola_admin.php');
    }
}

// Memeriksa jika tombol 'hapusData' ditekan
if (isset($_POST['hapusData'])) {
    $id = $_POST['id'];

    // Menghapus data dari tabel 'masuk' dalam database berdasarkan ID
    $deleteData = mysqli_query($conn, "DELETE FROM masuk WHERE id = '$id'");
    if ($deleteData) {
        header('location: keluar.php');
    } else {
        echo 'gagal';
        header('location: keluar.php');
    }
}

// Menghitung total barang masuk
$query1 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM masuk");
$data1 = mysqli_fetch_assoc($query1);
$count2 = $data1['total'];

// Menghitung total barang keluar
$query3 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM keluar");
$data3 = mysqli_fetch_assoc($query3);
$count3 = $data3['total'];

$count1 = $count2 + $count3;

?>

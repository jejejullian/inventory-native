<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "inventory");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteData = mysqli_query($conn, "DELETE FROM keluar WHERE id = '$id'");
    if ($deleteData) {
        header('location: keluar.php');
    } else {
        echo 'gagal';
        header('location: keluar.php');
    }
}
?>
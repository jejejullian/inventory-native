<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "inventory");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteData = mysqli_query($conn, "DELETE FROM login WHERE id = '$id'");
    if ($deleteData) {
        header('location: kelola_admin.php');
    } else {
        echo 'gagal';
        header('location: kelola_admin.php');
    }
}
?>


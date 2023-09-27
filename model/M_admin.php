<?php
// Fungsi untuk memperbarui data admin
function updateData($conn, $id, $username, $password) {
    $query = "UPDATE login SET username='$username', password='$password' WHERE id='$id'";
    if (mysqli_query($conn, $query)) {
        header("Location: kelola_admin.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}


if (isset($_POST['updateadmin'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    updateData($conn, $id, $username, $password);
}
?>

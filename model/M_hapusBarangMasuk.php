<?php
// Periksa apakah kunci "id" ada dalam array $_GET
if (isset($_GET['id'])) {
    // Ambil id dari baris yang akan dihapus
    $idBarang = $_GET['id'];

    // Ambil data dari tabel 'masuk' berdasarkan id
    $query = "SELECT * FROM masuk WHERE id = $idBarang";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // Simpan data ke dalam variabel
    $namabarang = $row['nama_barang'];
    $kodebarang = $row['kode_barang'];
    $merkbarang = $row['merk_barang'];
    $jumlahbarang = $row['jumlah_barang'];
    $hargabarang = $row['harga_barang'];
    $penanggungjawab = $row['penanggung_jawab'];
    $tanggalmasuk = $row['tanggal_masuk'];
    $ruangan = $row['ruangan'];

    // Bangun dan jalankan query DELETE
    $queryDelete = "DELETE FROM masuk WHERE id = $idBarang";
    mysqli_query($conn, $queryDelete);

    // Masukkan data ke dalam tabel 'keluar'
    $queryInsert = "INSERT INTO keluar (kode_barang, nama_barang, merk_barang, jumlah_barang, harga_barang, penanggung_jawab, tanggal_keluar, ruangan) 
                    VALUES ('$kodebarang', '$namabarang', '$merkbarang', '$jumlahbarang', '$hargabarang', '$penanggungjawab', '$tanggalmasuk', '$ruangan')";
    mysqli_query($conn, $queryInsert);

    // Redirect kembali ke menu utama
    header('location: masuk.php');
} else {
    echo "Error: Parameter id hilang.";
}

// Tutup koneksi database
mysqli_close($conn);
?>

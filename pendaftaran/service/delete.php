<?php
include '../config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data foto dari database
    $sql = "SELECT foto FROM pendaftaran WHERE id_siswa = '$id'";
    $query = mysqli_query($db, $sql);
    $data = mysqli_fetch_array($query);

    // Hapus file foto
    $lokasi_foto = "../img/foto_siswa/" . $data['foto'];
    if (file_exists($lokasi_foto)) {
        unlink($lokasi_foto);
    }

    // Hapus data dari database
    $sql = "DELETE FROM pendaftaran WHERE id_siswa = '$id'";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../dashboard-admin.php'); // redirect back to admin page
        exit;
    } else {
        echo "Error deleting data: " . mysqli_error($db);
    }
} else {
    echo "No ID provided";
}
?>
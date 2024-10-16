<?php 

include 'config/database.php';
session_start();

// Periksa apakah admin sudah login
if (!isset($_SESSION['in_login']) || $_SESSION['in_login'] !== true) {
    header("Location: logAdmin.php");
    exit;
}




$update_message = '';
if (isset($_SESSION['update_message'])) {
    $update_message = $_SESSION['update_message'];
    unset($_SESSION['update_message']);
}
// Logika pembaruan status
if (isset($_POST['update_status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sqlupdate = "UPDATE pendaftaran SET status = '$status' WHERE id_siswa = '$id'";
    $query = mysqli_query($db, $sqlupdate);

    if ($query) {
        $_SESSION['update_message'] = "Status berhasil diperbarui";
    } else {
        $_SESSION['update_message'] = "Gagal memperbarui status: " . mysqli_error($db);
    }
    
    // Redirect setelah reload untuk menghindari pengiriman ulang formulir
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Sintak logout
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location: login.php');
    exit;
}


?>
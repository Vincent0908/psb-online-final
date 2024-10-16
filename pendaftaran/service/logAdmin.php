<?php 
include 'config/database.php';
session_start();

if (isset($_SESSION["in_login"])) {
    header("Location: dashboard-admin.php");
    exit;
}
if (isset($_SESSION["is_login"])) {
    header("Location: dashboard-user.php");
    exit;
}


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data = $result->fetch_assoc();
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['in_login'] = true;
        header("Location: dashboard-admin.php");
        exit;
    } else {
        echo "<script>alert('Username atau Password salah'); window.location.href='logAdmin.php';</script>";
        exit;
    }
}
?>
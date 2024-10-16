<?php
  include "config/database.php";
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
    $nisn = $_POST['nisn'];
    $id = $_POST['id'];

    $sql = "SELECT * FROM pendaftaran WHERE nisn = '$nisn' AND id_siswa = '$id'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
      $data = $result->fetch_assoc();
      $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
      $_SESSION['id_siswa'] = $data['id_siswa'];
      $_SESSION['is_login'] = true;
      header('location:dashboard-user.php');
      exit;
    } else {
      echo "<script>alert('NISN atau Id Login Salah'); window.location.href='login.php';</script>";
      
    }

    
  }
?>
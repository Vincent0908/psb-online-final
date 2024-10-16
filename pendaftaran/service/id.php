<?php
  include "config/database.php";

  if (isset($_SESSION["is_login"])) {
    header("Location: dashboard-user.php");
    exit;
}

if (isset($_SESSION["in_login"])) {
  header("Location: dashboard-admin.php");
  exit;
}

  if (isset($_POST['login'])) {
    $nisn = $_POST['nisn'];
    $sql = "SELECT id_siswa FROM pendaftaran WHERE nisn = '$nisn'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $id_siswa = $row['id_siswa'];
      $message = "Id Login Anda Adalah : $id_siswa";
      echo "<script>
                alert('$message');
                window.location.href='login.php';
              </script>";
    } else {
      echo "<script>alert('Id Login Tidak Ditemukan')</script>";
    }
  }
?>
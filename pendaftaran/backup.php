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
    
    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $nisn = $_POST['nisn'];
        $asal = $_POST['asal'];
        $tpt_lahir = $_POST['tpt_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $hp = $_POST['hp'];
        $agama = $_POST['agama'];
        $email = $_POST['email'];
        $jurusan = $_POST['jurusan'];
    
        // Validasi NISN
        if (strlen($nisn) !== 10) {
            echo "<script>alert('NISN harus terdiri dari 10 digit.'); window.history.back();</script>";
            exit();
        }
    
        // Validasi nomor HP
        if (strlen($hp) < 11 || strlen($hp) > 13) {
            echo "<script>alert('Nomor HP harus terdiri dari 11 hingga 13 digit.'); window.history.back();</script>";
            exit();
        }
    
        // Cek data sudah kedaftar
        $check_nisn = mysqli_query($db, "SELECT * FROM pendaftaran WHERE nisn = '$nisn'");
        if (mysqli_num_rows($check_nisn) > 0) {
            echo "<script>alert('NISN sudah terdaftar.'); window.history.back();</script>";
            exit();
        }
    
        
        $check_hp = mysqli_query($db, "SELECT * FROM pendaftaran WHERE no_hp = '$hp'");
        if (mysqli_num_rows($check_hp) > 0) {
            echo "<script>alert('Nomor HP sudah terdaftar.'); window.history.back();</script>";
            exit();
        }
    
        
        $check_email = mysqli_query($db, "SELECT * FROM pendaftaran WHERE email = '$email'");
        if (mysqli_num_rows($check_email) > 0) {
            echo "<script>alert('Email sudah terdaftar.'); window.history.back();</script>";
            exit();
        }
    
        $getMaxId = mysqli_query($db, "SELECT MAX(RIGHT(id_siswa, 5)) AS id FROM pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
    
        $target_dir = "uploads/"; // Pastikan direktori ini ada dan dapat ditulis
        $file_name = basename($_FILES["foto"]["name"]);
        $target_file = $target_dir . $generateId . "_" . $file_name;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        // Cek apakah file benar-benar gambar
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if($check === false) {
            echo "<script>alert('File bukan gambar.'); window.history.back();</script>";
            exit();
        }
    
        // Cek ukuran file (batas 5MB)
        if ($_FILES["foto"]["size"] > 5000000) {
            echo "<script>alert('Maaf, file terlalu besar. Maksimum 5MB.'); window.history.back();</script>";
            exit();
        }
    
        // Izinkan format file tertentu
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "<script>alert('Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.'); window.history.back();</script>";
            exit();
        }
    
        // Jika semua ok, coba upload file
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            // File berhasil diupload, simpan nama file ke database
            $foto = $generateId . "_" . $file_name;
            
            $sql = "INSERT INTO pendaftaran (id_siswa, nisn, nama_lengkap, asal_sekolah, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, no_hp, agama, email, prodi, foto) 
                    VALUES ('$generateId', '$nisn','$nama', '$asal', '$tpt_lahir', '$tgl_lahir', '$jk', '$alamat', '$hp', '$agama', '$email', '$jurusan', '$foto')";
    
            if($db->query($sql)){
                $message = "Selamat data anda sudah di daftarkan, gunakan id login berikut untuk login: $generateId";
                echo "<script>
                        alert('$message');
                        window.location.href='login.php';
                      </script>";
                exit();
            } else {
                echo "Terjadi kesalahan saat mendaftar.";
            }
        } else {
            echo "<script>alert('Maaf, terjadi kesalahan saat mengupload file.'); window.history.back();</script>";
            exit();
        }
    }




    // Handle file upload
    $foto = null;
    if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["foto"]["name"];
        $filetype = $_FILES["foto"]["type"];
        $filesize = $_FILES["foto"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MIME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("uploads/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                if(move_uploaded_file($_FILES["foto"]["tmp_name"], "uploads/" . $filename)){
                    $foto = $filename;
                }else{
                    echo "File is not uploaded";
                    exit();
                }
            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
            exit();
        }
    }
?>
<?php 
    include 'config/database.php';

    session_start();
    
    if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] !== true) {
        header("Location: dashboard-user.php");
        exit;
    }
    
    if (isset($_POST['keluar'])) {
        session_unset();
        session_destroy();
        header('location: login.php');
        exit;
    }
    
    $id = $_SESSION['id_siswa'];
    $sql = "SELECT * FROM pendaftaran WHERE id_siswa = '$id'";
    $query = mysqli_query($db, $sql);
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftar</title>
    <link rel="shortcut icon" href="assets/img/65eaaffb57741-TUT-WURI-HANDAYANI.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="bg-gray-100">
    <div class="container mx-auto max-w-4xl px-4 py-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <header class="bg-blue-500 text-white p-4 text-center">
                <h3 class="text-xl font-bold">Selamat datang <?= $_SESSION['nama_lengkap'] ?></h3>
                <p class="mt-2">Berikut adalah data dan status pendaftaran anda :</p>
            </header>
            
            <div class="p-4">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th colspan="2" class="bg-gray-200 text-left p-2 font-bold">Data dan status pendaftaran anda</th>
                        </tr>
                    </thead>
                    <tbody>

                    <tr>
                            <td class="border p-2 font-semibold">NISN</td>
                            <td class="border p-2 font-semibold"><?= $data['nisn']?></td>
                        </tr>
                        <tr>
                            <td class="border p-2 font-semibold">Nama Lengkap</td>
                            <td class="border p-2 font-semibold"><?= $data['nama_lengkap']?></td>
                        </tr>
                        <tr>
                            <td class="border p-2 font-semibold">Asal Sekolah</td>
                            <td class="border p-2 font-semibold"><?= $data['asal_sekolah']?></td>

                        </tr>
                        <tr>
                        <td class="border p-2 font-semibold">Tempat Lahir</td>
                        <td class="border p-2 font-semibold"><?= $data['tempat_lahir']?></td>
                            </tr>
                            <tr>
                            <td class="border p-2 font-semibold">Tanggal Lahir</td>
                            <td class="border p-2 font-semibold"><?= $data['tanggal_lahir']?></td>
                        </tr>
                        <tr>
                        <td class="border p-2 font-semibold">Jenis Kelamin</td>
                        <td class="border p-2 font-semibold"><?= $data['jenis_kelamin']?></td>
                        </tr>
                        <tr>
                        <td class="border p-2 font-semibold">Alamat</td>
                        <td class="border p-2 font-semibold"><?= $data['alamat']?></td>
                        </tr>
                        <tr>
                        <td class="border p-2 font-semibold">No Hp</td>
                        <td class="border p-2 font-semibold"><?= $data['no_hp']?></td>
                        </tr>
                        <tr>
                        <td class="border p-2 font-semibold">Agama</td>
                        <td class="border p-2 font-semibold"><?= $data['agama']?></td>
                        </tr>
                        <tr>
                        <td class="border p-2 font-semibold">Email</td>
                        <td class="border p-2 font-semibold"><?= $data['email']?></td>
                        </tr>
                        <tr>
                        <td class="border p-2 font-semibold">Jurusan</td>
                        <td class="border p-2 font-semibold"><?= $data['prodi']?></td>
                        </tr>   
                        <tr>
                        <td class="border p-2 font-semibold">Status</td>
                        <td class="border p-2 font-semibold"><?= $data['status']?></td>
                        </tr>

                        <tr>
                            <td class="border p-2 font-semibold">Foto</td>
                            <td class="border p-2">
                                <?php if($data['foto']): ?>
                                    <img src="img/foto_siswa/<?= $data['foto'] ?>" alt="Foto <?= $data['nama_lengkap'] ?>" class="w-32 h-32 object-cover">
                                <?php else: ?>
                                    <p>Tidak ada foto</p>
                                <?php endif; ?>
                            </td>
                        </tr>

                        
                    </tbody>
                </table>
                
                <div class="mt-4 flex justify-between">
                    <form action="" method="post">
                        <button type="submit" name="keluar" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Logout
                        </button>
                    </form>
                    <?php 
                        $sqlget = "SELECT * FROM pendaftaran";
                        $query = mysqli_query($db, $sqlget);
                        $data = mysqli_fetch_assoc($query);
                        ?>
                    <a href="edit-user.php?id=<?= $id ?>" class='bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded'>Edit</a>
                    <a href="print-data.php" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Download/Print
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



<?php
                        // $fields = [
                        //     'NISN' => 'nisn',
                        //     'Nama Lengkap' => 'nama_lengkap',
                        //     'Asal Sekolah' => 'asal_sekolah',
                        //     'Tempat Lahir' => 'tempat_lahir',
                        //     'Tanggal Lahir' => 'tanggal_lahir',
                        //     'Jenis Kelamin' => 'jenis_kelamin',
                        //     'Alamat' => 'alamat',
                        //     'No Hp' => 'no_hp',
                        //     'Agama' => 'agama',
                        //     'Email' => 'email',
                        //     'Jurusan' => 'prodi',
                        //     'Status' => 'status'
                        // ];

                        // foreach ($fields as $label => $field) {
                        //     echo "<tr>
                        //         <td class='border p-2 font-semibold'>$label :</td>
                        //         <td class='border p-2'>{$data[$field]}</td>
                        //     </tr>";
                        // }
                        ?>
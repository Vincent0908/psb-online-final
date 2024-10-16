<?php 
    include 'config/database.php';

    session_start();

    $sql = "SELECT * FROM pendaftaran";
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
    <script>
        window.print();
        windows.location.href='dashboard-user.php'
    </script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto max-w-4xl px-4 py-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <!-- <header class="bg-blue-500 text-white p-4 text-center">
                <h3 class="text-xl font-bold">Selamat datang <?= $_SESSION['nama_lengkap'] ?></h3>
                <p class="mt-2">Berikut adalah data dan status pendaftaran anda :</p>
            </header> -->
            
            <div class="p-4">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th colspan="2" class="bg-gray-200 text-left p-2 font-bold">Data dan status pendaftaran anda</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $fields = [
                            'NISN' => 'nisn',
                            'Nama Lengkap' => 'nama_lengkap',
                            'Asal Sekolah' => 'asal_sekolah',
                            'Tempat Lahir' => 'tempat_lahir',
                            'Tanggal Lahir' => 'tanggal_lahir',
                            'Jenis Kelamin' => 'jenis_kelamin',
                            'Alamat' => 'alamat',
                            'No Hp' => 'no_hp',
                            'Agama' => 'agama',
                            'Email' => 'email',
                            'Jurusan' => 'prodi',
                            'Status' => 'status'
                        ];

                        foreach ($fields as $label => $field) {
                            echo "<tr>
                                <td class='border p-2 font-semibold'>$label :</td>
                                <td class='border p-2'>{$data[$field]}</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
                
                
            </div>
        </div>
    </div>
</body>
</html>
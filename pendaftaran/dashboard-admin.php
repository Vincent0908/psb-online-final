<?php
        include 'service/dash-admin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="assets/img/65eaaffb57741-TUT-WURI-HANDAYANI.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto max-w-4xl px-4 py-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <header class="bg-blue-500 text-white p-4 text-center">
                <h3 class="text-xl font-bold">Selamat datang admin <?= $_SESSION['nama'] ?></h3>
                <p class="mt-2">Berikut adalah tabel data pendaftar :</p>
            </header>
            
            <?php if (!empty($update_message)): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline"><?= $update_message ?></span>
                </div>
            <?php endif; ?>

            <div class="p-4">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="border p-2 bg-gray-200 font-bold">Nama Pendaftar</th>
                            <th class="border p-2 bg-gray-200 font-bold">Status</th>
                            <th class="border p-2 bg-gray-200 font-bold">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sqlget = "SELECT * FROM pendaftaran";
                    $query = mysqli_query($db, $sqlget);

                    while ($data = mysqli_fetch_array($query)) {
                        echo "
                        <tr class='hover:bg-gray-100'>
                            <td class='border p-2'>{$data['nama_lengkap']}</td>
                            <td class='border p-2'>
                                <form action='' method='post'>
                                    <select name='status' class='w-full p-1 border rounded'>
                                        <option value='Menunggu' " . ($data['status'] == 'Menunggu' ? 'selected' : '') . ">Menunggu</option>
                                        <option value='Diterima' " . ($data['status'] == 'Diterima' ? 'selected' : '') . ">Diterima</option>
                                        <option value='Ditolak' " . ($data['status'] == 'Ditolak' ? 'selected' : '') . ">Ditolak</option>
                                    </select>
                                    <input type='hidden' name='id' value='{$data['id_siswa']}'>
                                    <button type='submit' name='update_status' class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-xs mt-2'>Update Status</button>
                                </form>
                            </td>
                            <td class='border p-2'>
                                <div class='flex justify-center gap-2'>
                                    <a href='admin/detail.php?id={$data['id_siswa']}' class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-5 rounded text-xs'>Detail</a>
                                    <a href='service/delete.php?id={$data['id_siswa']}' class='bg-red-500 hover:bg-red-700 text-white font-bold py-4 px-5 rounded text-xs' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a>
                                </div>
                            </td>
                        </tr>
                        ";
                    }
                    ?>
                    </tbody>
                </table>
                
                <div class="mt-4 flex justify-between">
                    <a href="add.php" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Tambah Data
                    </a>
                    <form action="" method="POST">
                        <button type="submit" name="logout" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
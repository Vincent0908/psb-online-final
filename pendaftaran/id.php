

<?php
  include "service/id.php";
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Id</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="../assets/img/65eaaffb57741-TUT-WURI-HANDAYANI.png" type="image/x-icon">
</head>
<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-12 w-auto" src="assets/img/65eaaffb57741-TUT-WURI-HANDAYANI.png" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Masukkan NISN Untuk Mendapatkan Kembali Id Login Anda</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="id.php" method="POST">
                <div>
                    <label for="nisn" class="block text-sm font-medium leading-6 text-gray-900">NISN</label>
                    <div class="mt-2">
                        <input id="nisn" name="nisn" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6">
                    </div>
                </div>


                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600" name="login">Dapatkan Id</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Belum mendaftar?
                <a href="register.php" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Daftar disini</a>
                atau 
                <a href="login.php" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Kembali Login</a>
                
            </p>
        </div>
    </div>
</body>
</html>
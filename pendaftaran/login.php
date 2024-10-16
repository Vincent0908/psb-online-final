<?php
  include "service/login.php";
?>


<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="assets/img/65eaaffb57741-TUT-WURI-HANDAYANI.png" type="image/x-icon">
</head>
<body class="h-full">

<div class="flex max-h-full flex-col justify-center mx-auto  max-w-screen-xl px-6 py-16 sm:px-6 lg:px-8">
    <!-- mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 bg-gray-50 -->
    <div class="mt- sm:mx-auto sm:w-full sm:max-w-sm mx-auto max-w-lg">
        <form action="login.php" method="POST" class="mb-0 mt-10 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 bg-gray-50">
            <img class="mx-auto h-12 w-auto" src="assets/img/65eaaffb57741-TUT-WURI-HANDAYANI.png" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Silahkan Login Untuk Melihat Status Pendaftaran</h2>
      
            <div>
                    <label for="nisn" class="block text-sm font-medium leading-6 text-gray-900">NISN</label>
                    <div class="mt-2">
                        <input id="nisn" name="nisn" type="text" placeholder="Masukkan NISN" autocomplete="off" required class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="id_login" class="block text-sm font-medium leading-6 text-gray-900">Id Login</label>
                        <div class="text-sm">
                            <a href="id.php" class="font-semibold text-blue-500 hover:text-indigo-500">Lupa Id?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="id_login" name="id" placeholder="Masukkan Id Login" type="text" required class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6">
                    </div>
                </div>
                    
        
        
        <!-- <i style="display:flex;  justify-content:center; align-item:center; font-family:'Courier New', Courier, monospace"><?= $login_message ?></i> -->
        <button
        type="submit"
        name="login"
        class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
        >
        Log in
      </button>

      <p class="mt-10 text-center text-sm text-gray-500">
        Belum mendaftar?
        <a href="register.php" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Daftar disini</a>
        atau 
        <a href="logAdmin.php" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Login sebagai Admin</a>
        
    </p>
    </form>
</div>
</div>
</body>
</html>
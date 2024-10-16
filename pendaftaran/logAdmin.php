<?php 
include 'service/logAdmin.php';
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
        <form action="logAdmin.php" method="POST" class="mb-0 mt-10 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 bg-gray-50">
            
            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Silahkan Login Sebagai Admin Untuk Memodifikasi Data</h2>
      
      <div>
        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">username</label>
        
        <div class="relative">
            <input
            type="text"
            name="username"
            required
            class="w-full rounded-lg border-gray-200 p-2 pe-12 text-sm shadow-sm block w-full rounded-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6"
            placeholder="Masukkan Username"
            />
            </div>
        </div>
      <div>
        <label for="id" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
        
        <div class="relative">
            <input
            type="password"
            name="password"
            required
            class="w-full rounded-lg border-gray-200 p-2 pe-12 text-sm shadow-sm block w-full rounded-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6"
            placeholder="Masukkan Password"
            />
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
                Kembali ke
                <a href="login.php" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Halaman Login</a>
            </p>
    </form>
</div>
</div>
</body>
</html>
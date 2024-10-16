<?php 
    include 'service/add.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="assets/img/65eaaffb57741-TUT-WURI-HANDAYANI.png" type="image/x-icon">
    <script type="text/javascript" src="script/script.js"></script>
</head>

<body class="bg-gray-100">
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            
            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Silahkan masukkan data yang ingin ditambahkan</h2>
        </div>
        <main
        class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6 lg:order-last">

        <div class="sm:mx-auto max-w-m sm:w-full lg:max-w-3xl sm:max-w-sm">
        <form action="" class="mt-8 grid grid-cols-6 gap-6" method="POST" id="add-form" enctype="multipart/form-data">
              <div class="col-span-6">
                    <label for="nisn" class="block text-sm font-medium text-gray-700"> NISN </label>
                    <input 
                    type="number"
                    name="nisn" 
                    id="nisn"
                    required
                    placeholder="Masukkan NISN"
                    class="block w-full rounded-md border-0 border-gray-200 p-2 pe-12 text-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 shadow-sm
                    [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
                  </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="nama" class="block text-sm font-medium text-gray-700">
                    Nama Lengkap : 
                  </label>
      
                  <input
                    type="text"
                    id="nama"
                    name="nama"
                    required
                    placeholder="Masukkan Nama Lengkap"
                    class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6  p-2 pe-12 text-sm shadow-sm"
                  />
                </div>
      
                <div class="col-span-6 sm:col-span-3">
                  <label for="asal" class="block text-sm font-medium text-gray-700">
                    Asal Sekolah : 
                  </label>
      
                  <input
                    type="text"
                    id="asal"
                    name="asal"
                    required
                    placeholder="Masukkan Asal Sekolah"
                    class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm"
                  />
                </div>
      
                <div class="col-span-6 sm:col-span-3">
                    <label for="tpt_lahir" class="block text-sm font-medium text-gray-700">
                      Tempat Lahir :
                    </label>
        
                    <input
                      type="text"
                      id="tpt_lahir"
                      name="tpt_lahir"
                      required
                      placeholder="Masukkan Tempat Lahir"
                      class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm"
                    />
                  </div>
        
                  <div class="col-span-6 sm:col-span-3">
                    <label for="tgl_lahir" class="block text-sm font-medium text-gray-700">
                      Tanggal Lahir
                    </label>
        
                    <input
                      type="date"
                      id="tgl_lahir"
                      name="tgl_lahir"
                      required
                      class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm"
                    />
                  </div>
    
                <div class="col-span-6 sm:col-span-3">
                    <label for="jk" class="block text-sm font-medium text-gray-700">
                      Jenis Kelamin
                    </label>
        

                    <select  class="w-full rounded-md border-gray-200 p-2 pe-12 text-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 shadow-sm" id="jk" name="jk" required>
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">
                      Alamat
                    </label>
        
                    <input
                      type="text"
                      id="alamat"
                      name="alamat"
                      placeholder="Masukkan Alamat"
                      required
                      class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm"
                    />
                  </div>

                  <div class="col-span-6">
                    <label for="jurusan" class="block text-sm font-medium text-gray-700"> Jurusan </label>
        
                    <select name="jurusan" id="jurusan" class="w-full rounded-md border-gray-200 p-2 pe-12 text-sm shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6" required>
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="Desain bangunan">Desain bangunan</option>
                        <option value="Teknik Konstruksi">Teknik Konstruksi</option>
                        <option value="Teknik Kendaraan">Teknik Kendaraan</option>
                        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Listrik">Teknik Listrik</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                        <option value="Perhotelan">Perhotelan</option>
                    </select>
                  </div>

                  <div class="col-span-6">
                    <label for="agama" class="block text-sm font-medium text-gray-700"> Agama </label>
        
                    <select name="agama" id="agama" class="w-full rounded-md border-gray-200 p-2 pe-12 text-sm shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6" required>
                        <option value="">-- Pilih --</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                            <option value="konghucu">Konghucu</option>
                    </select>
                  </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="hp" class="block text-sm font-medium text-gray-700">
                      Nomor Handphone
                    </label>
                    <input
                      type="number"
                      id="hp"
                      name="hp"
                      placeholder="Masukkan Nomor Handphone"
                      class="w-full rounded-md border-gray-200 p-2 pe-12 text-sm shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6
                             [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                    />
                  </div>
      
                <div class="col-span-6 sm:col-span-3">
                  <label for="email" class="block text-sm font-medium text-gray-700">
                    Email
                  </label>
      
                  <input
                    type="email"
                    id="email"
                    name="email"
                    required
                    placeholder="Masukkan Email"
                    class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm"
                  />
                </div>

                <div class="col-span-6">
                <label for="foto" class="block text-sm font-medium text-gray-700 mb-2">
                  Upload Foto
                </label>
                <div id="drop-area" class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                  <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="foto" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Upload a file</span>
                        <input id="foto" name="foto" type="file" class="sr-only" required accept="image/*">
                      </label>
                      <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 5MB</p>
                  </div>
                </div>
                <div id="preview" class="mt-4 hidden">
                  <img id="preview-image" src="#" alt="Preview" class="max-w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
      
                <div class="col-span-6">
                  <p class="text-sm text-gray-500 font-bold">
                    Pastikan semua data yang di input sudah sesuai
                  </p>
                </div>
      
                <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                  <button
                    class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-blue-500  focus:outline-none focus:ring"
                    type="submit" 
                    name="tambah"
                    value="submit"
                  >
                    Tambah Data
                  </button>
      
                  <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                    Kembali Ke
                    <a href="login.php" require class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Dashboard Admin</a>.
                  </p>
                </div>
              </form>

        </main>
        
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
  const dropArea = document.getElementById('drop-area');
  const fileInput = document.getElementById('foto');
  const preview = document.getElementById('preview');
  const previewImage = document.getElementById('preview-image');

  ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false);
  });

  function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
  }

  ['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, highlight, false);
  });

  ['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, unhighlight, false);
  });

  function highlight() {
    dropArea.classList.add('border-indigo-500');
  }

  function unhighlight() {
    dropArea.classList.remove('border-indigo-500');
  }
  function handleDrop(e) {
    const dt = e.dataTransfer;
    const files = dt.files;
    handleFiles(files);
  }

  function handleFiles(files) {
    if (files.length > 0) {
      const file = files[0];
      if (file.type.startsWith('image/')) {
        fileInput.files = files;
        updatePreview(file);
      } else {
        alert('Please upload an image file');
      }
    }
  }

  function updatePreview(file) {
    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        previewImage.src = e.target.result;
        preview.classList.remove('hidden');
      }
      reader.readAsDataURL(file);
    }
  }

  fileInput.addEventListener('change', function(e) {
    const file = e.target.files[0];
    updatePreview(file);
  });

  // Validasi ukuran file (max 10MB)
  function validateFileSize(file) {
    const maxSize = 10 * 1024 * 1024; // 10MB in bytes
    if (file.size > maxSize) {
      alert('File size exceeds 10MB limit');
      fileInput.value = ''; // Clear the input
      preview.classList.add('hidden');
      return false;
    }
    return true;
  }

  // Update fungsi handleFiles dan event listener untuk fileInput
  function handleFiles(files) {
    if (files.length > 0) {
      const file = files[0];
      if (file.type.startsWith('image/')) {
        if (validateFileSize(file)) {
          fileInput.files = files;
          updatePreview(file);
        }
      } else {
        alert('Please upload an image file');
      }
    }
  }

  fileInput.addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file && validateFileSize(file)) {
      updatePreview(file);
    }
  });
});
    </script>
</body>

</html>
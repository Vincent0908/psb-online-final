<?php
// edit.php
include 'config/database.php';
// Retrieve the ID from the URL parameter

// Query the database to retrieve the existing data
$id = $_GET['id'];
$sql = "SELECT * FROM pendaftaran WHERE id_siswa = '$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);

if (isset($_POST['update'])) {
    // Update the data in the database
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $asal = $_POST['asal'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $agama = $_POST['agama'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];

    $sql = "UPDATE pendaftaran SET 
            nisn = '$nisn', 
            nama_lengkap = '$nama', 
            asal_sekolah = '$asal', 
            tempat_lahir = '$tpt_lahir', 
            tanggal_lahir = '$tgl_lahir', 
            jenis_kelamin = '$jk', 
            alamat = '$alamat', 
            prodi = '$jurusan', 
            agama = '$agama', 
            no_hp = '$hp', 
            email = '$email' 
            WHERE id_siswa = '$id'";
    mysqli_query($db, $sql);
    header('Location: dashboard-admin.php'); // Redirect back to the admin page
    exit;
}
// Create the form with the existing data populated
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
            
            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Silahkan Edit Data Sesuai Yang Anda Inginkan</h2>
        </div>
        <main
        class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6 lg:order-last">

        <div class="sm:mx-auto max-w-m sm:w-full lg:max-w-3xl sm:max-w-sm">
        <form action="" class="mt-8 grid grid-cols-6 gap-6" method="POST" id="add-form">
              <div class="col-span-6">
                    <label for="nisn" class="block text-sm font-medium text-gray-700"> NISN </label>
                    <input 
                    type="number"
                    name="nisn" 
                    id="nisn"
                    readonly
                    required
                    value="<?php echo $data['nisn']; ?>"
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
                    value="<?php echo $data['nama_lengkap']; ?>"
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
                    value="<?php echo $data['asal_sekolah']; ?>"
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
                      value="<?php echo $data['tempat_lahir']; ?>"
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
                      value="<?php echo $data['tanggal_lahir']; ?>"
                      class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm"
                    />
                  </div>
    
                <div class="col-span-6 sm:col-span-3">
                    <label for="jk" class="block text-sm font-medium text-gray-700">
                      Jenis Kelamin
                    </label>
        

                    <select  class="w-full rounded-md border-gray-200 p-2 pe-12 text-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 shadow-sm" id="jk" name="jk" required>
                        <option value=""><?php echo $data['jenis_kelamin']; ?></option>
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
                      value="<?php echo $data['alamat']; ?>"
                      class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm"
                    />
                  </div>

                  <div class="col-span-6">
                    <label for="jurusan" class="block text-sm font-medium text-gray-700"> Jurusan </label>
        
                    <select name="jurusan" id="jurusan" class="w-full rounded-md border-gray-200 p-2 pe-12 text-sm shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6" required>
                        <option value=""><?php echo $data['prodi']; ?></option>
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
                        <option value=""><?php echo $data['agama']; ?></option>
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
                      value="<?php echo $data['no_hp']; ?>"
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
                    value="<?php echo $data['email']; ?>"
                    placeholder="Masukkan Email"
                    class="w-full rounded-md border-gray-200 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-200 sm:text-sm p-2 pe-12 text-sm sm:leading-6 p-2 pe-12 text-sm shadow-sm"
                  />
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
                    name="update"
                    value="submit"
                  >
                    Edit data
                  </button>
      
                  <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                    Kembali Ke
                    <a href="dashboard-user.php" require class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Dashboard User</a>.
                  </p>
                </div>
              </form>

        </main>
        
    </div>
</body>

</html>

<?php
// Process the form submission

?>
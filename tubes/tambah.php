<?php 
//session
  session_start();

  //jika session 'login' tidak ada maka :
  if (!isset($_SESSION['login']))
  {
    header("Location: halaman-depan.php");
    exit;
  }

  require 'functions.php';

// check apakah tombol tambah sudah di klik atau belum
if (isset($_POST['tambah'])) {
  //jika tambah menghasilkan data > 0
   if ( tambah($_POST) > 0 )
   {
     echo "<script> 
        alert( 'Data berhasil ditambahkan');
        document.location.href = 'index.php';
     </script>" ;
   } else {
     echo " Data tidak berhasil ditambahkan ";
   }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/tambah.css">
  <title>tambah Data Dokter</title>
</head>
<body>
    <!-- enctype memiliki akses ke variabel superglobal $_files dan isi array dari file akan kosong -->
    <form action="" method="POST" enctype="multipart/form-data">
    <h3 class="heading">Form Tambah Data Dokter</h3>
      <ul>
        <li>
          <label class="nama">
            Nama : <br>
            <!-- required : harus ada isi nya -->
            <input type="text" name="nama" autofocus required>
          </label>
        </li>
        <li>
          <label class="kode">
            Kode Dokter : <br>
            <input type="text" name="kode_dr" required>
          </label>
        </li>
        <li>
          <label class="email">
            Email : <br>
            <input type="email" name="email" required>
          </label>
        </li>
        <li>
          <label class="spesialis">
            Spesialis : <br>
            <input type="text" name="spesialis" required>
          </label>
        </li>
        <li>
          <label class="gambar">
            Gambar ( recommended : 500 x 500 px) <br>
            <input type="file" name="gambar" class="gambar" onchange="previewImage()">
          </label>
          <img src="img/nophoto.jpg" width="120" style="display: block;" class="img-preview">
        </li>
        <button type="submit" name="tambah">Tambah Data!</button>
      <a href="index.php" class="home">Kembali ke Halaman Admin</a>
      </ul>
    </form>


<script>src="js/script.js"</script>
</body>
</html>
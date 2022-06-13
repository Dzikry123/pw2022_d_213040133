<?php 
  //session
  session_start();

  //jika session 'login' tidak ada maka :
  if (!isset($_SESSION['login']))
  {
    header("Location: halaman-depan.php");
    // header di repo belum dirubah masih ke login.php
  }
  
  require 'functions.php';

//karena ubah butuh id, jika tidak ada id di url = error
if (!isset($_GET['id'])) 
{
  header("Location: index.php");
  exit;
}


//ambil id dari url
$id = $_GET['id'];

// cari atau query dokter berdasarkan id
$dr = query (" SELECT * FROM dokter WHERE id = $id");

// check apakah tombol ubah sudah di klik atau belum
if (isset($_POST['ubah'])) {
   if ( ubah($_POST) > 0 )
   {
     echo "<script> 
        alert( 'Data berhasil diubahkan');
        document.location.href = 'index.php';
     </script>" ;
   } else {
     echo " Data tidak berhasil diubahkan ";
   }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/ubah.css">
  <title>Ubah Data Dokter</title>
</head>
<body>

    <form action="" method="POST" enctype="multipart/form-data">
      <!-- value = untuk mengambil data dari array -->
      <!-- input id = hide ( agar tidak terlihat user ) -->
      <input type="hidden" name="id" autofocus required value="<?= $dr['id']; ?>">
      <h3 class="heading">Form ubah Data Dokter</h3>
      <ul>
        <li>
          <label>
            Nama : <br>
            <input type="text" name="nama" autofocus required value="<?= $dr['nama']; ?>">
          </label>
        </li>
        <li>
          <label>
            Kode Dokter: <br>
            <input type="text" name="kode_dr" required value="<?= $dr['kode_dr']; ?>">
          </label>
        </li>
        <li>
          <label>
            Email : <br>
            <input type="email" name="email" required value="<?= $dr['email']; ?>">
          </label>
        </li>
        <li>
          <label>
            Spesialis : <br>
            <input type="text" name="spesialis" required value="<?= $dr['spesialis']; ?>">
          </label>
        </li>
        <li>
          <input type="hidden" name="gambar_lama" value="<?= $dr['gambar']; ?>">
          <label>
            Gambar : (500x500 px)
            <input type="file" name="gambar" class="gambar" onchange="previewImage()">
          </label>
          <img src="img/<?= $dr['gambar']; ?>" width="120" style="display: block;" class="img-preview">
        </li>
      </ul>
      <button type="submit" name="ubah">Ubah Data!</button>
      <a href="index.php" class="home">Kembali ke Halaman Admin</a>
    </form>

    <script>src="js/script.js"</script>
</body>
</html>
<?php 
//session
session_start();

//jika session 'login' tidak ada maka :
if (!isset($_SESSION['login']))
{
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil id dari url
$id = $_GET['id'];

// jika tidak ada id di url
if (!isset($_GET['id'])) 
{
  header("Location: index.php");
  exit;
}

// jika tombol pdf di klik

if(isset($_POST['pdf'])){
        header("location:pdf.php");
    }

// query dokter berdasarkan id
$dr = query("SELECT * FROM dokter WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Dokter</title>
  <link rel="stylesheet" type="text/css" href="css/detail.css">
</head>
<body>

<div class="container">
  <div class="card-profil">
       <label>
          <img src="img/<?= $dr['gambar']; ?>" width="250">
          <p>( <?= $dr['nama']; ?> )</p>
       </label>
  </div>
  <div class="detail">
    <h3>Detail Dokter</h3>
   <div class="text">
    <div class="left-text">
      <p class="corner-top">Kode Dokter</p>
      <p>Nama</p>
      <p>Email</p>
      <p class="corner-bottom">Spesialis</p>
    </div>
    <div class="right-text">
      <p class="corner-top"><?= $dr['kode_dr']; ?></p>
      <p><?= $dr['nama']; ?></p>
      <p><?= $dr['email']; ?></p>
      <p class="corner-bottom"><?= $dr['spesialis']; ?></p>
    </div>

    <div class="link">
    <a href="ubah.php?id=<?= $dr['id']; ?>" class="ubah">Ubah</a><a href="hapus.php?id=<?= $dr['id']; ?>"  
    onclick="return confirm('apakah anda yakin ingin menghapus data ini ?');" class="hapus">Hapus</a>
    </div>    
  
    <a href="" class="report">PDF Reporting</a>

    <a href="index.php" class="home">Kembali ke daftar dokter</a>
    </div>
   </div>
</div>

</body>
</html>
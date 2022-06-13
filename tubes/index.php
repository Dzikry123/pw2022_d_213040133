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

//isi dari $dokter = panggil fungsi query
$dokter = query("SELECT * FROM dokter ");

// ketika tombol cari di klik
  if (isset($_POST['cari']))
  {
    $dokter = cari ($_POST['keyword']);
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Dokter</title>
  <link rel="stylesheet" href="css/index.css" type="text/css">
</head>
<body>
<nav class="menu">
  <div class="menu-toggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
  </div>

      <div class="brand">HealthyPedia</div>
      <ul class="menu-list">
        <li><a href="halaman-depan.php" class="halaman-depan">Home</a></li>
        <li><a href="tambah.php" class="add-doctor">Add Doctor</a></li>
        <li><a href="logout.php" class="logout">Log Out</a></li>
      </ul>
</nav>
  <form action="" method="POST">
    <input type="text" name="keyword" placeholder="Masukan keyword pencarian" 
    autocomplete="off" autofocus class="keyword">

    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>
  
  <div class="header">
    <h3 class="head">Daftar Dokter</h3>
  </div>
<div class="container">

  <table cellpadding="0" cellspacing="0" >
    <!-- ntuk spesialis itu sprt dokter umum / spesialis -->
    <tr>
      <th class="nomor">Nomor</th>
      <th class="gambar">Gambar</th>
      <th class="nama">Nama</th>
      <th class="aksi">Aksi</th>
    </tr>

    <!-- jika data/nama tidak ditemukan -->
    <?php if(empty($dokter)) :?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">Data tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

  <!-- looping $dokter as $dr -->
  <!-- $i ++ untuk auto increment -->
  
  <?php $i = 1; foreach( $dokter as $dr) : ?>
    <tr>
      <td class="nomor"><?= $i++; ?></td>
      <td class="gambar"><img src="img/<?= $dr['gambar']; ?>"></td>
      <td class="nama"><?= $dr['nama']; ?></td>
      <td class="aksi">
        <!-- href = mengirim id dari ['$id'] -->
        <a href="detail.php?id=<?= $dr['id']; ?>">lihat detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
    
  </table>
</div>

<div class="tambah">
    <a href="tambah.php" class="add">Tambah Data Dokter</a>
    <a href="report.php" class="report">PDF Report</a>
</div>

<div class="footer">
      <!-- <div class="about">
        <p>Doctor App</p>
        <a href="">About Us</a>
        <a href="">Terms & Policy</a>
      </div> -->

      <div class="t-p">
        <p>Copyright 2022</p>
      </div>

      <!-- <div class="lokasi">
        <p>Location</p>
        <p>3102 Melior Place</p>
        <p>Beverly Hills</p>
      </div> -->      
  </div>
  
<!-- Hamburger Menu -->
<script>const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function () {
  nav.classList.toggle('slide');
});
</script>

<script src="js/script.js"></script>
</body>
</html>
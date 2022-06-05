<?php 
//session
session_start();

require 'functions.php';
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
  <link rel="stylesheet" href="css/style.css?x=1" type="text/css">
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
        <li><a href="index.php">All Doctor</a></li>
        <li><a href="registrasi.php">Register</a></li>
        <li><a href="login.php">Log In</a></li>
      </ul>
</nav>

<div class="container">
  <div class="head">
    <h2>HealthyPedia</h2>
  </div>

  <div class="quote">
    <p>
      HealthyPedia merupakan salah satu aplikasi terbaik, kami menyediakan daftar dokter yang terpercaya untuk memenuhi kebutuhan kesehatan anda dan keluarga.
      Kami memberikan informasi relevan,kredibel, dan ditijau secara medis saat anda benar-benar membutuhkannya untuk membantu Anda dalam kebutuhan medis.
    </p>
  </div>

  <div class="link">
    <a href="login.php">Mulai !</a>
    <p>ayo mulai perjalanmu !</p>
  </div>
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
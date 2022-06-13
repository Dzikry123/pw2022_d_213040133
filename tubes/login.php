<?php 
  session_start();

  //jika session 'login' sudah ada maka :
    if (isset($_SESSION['login']))
     {
      header("Location: index.php");
      exit;
     }

  require "functions.php";

  //jika tombol login di klik
  if (isset($_POST['login']))
  {
    $login = login ($_POST);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="container">
 <form action="" method="POST">
  <!-- header gambar logo app -->
  <div class="imgcontainer">
    <img src="img/nophoto.jpg" alt="Avatar" class="avatar">
  </div>
   <ul>
    <!-- jika ada error = username / password salah,
     tampilkan ini -->
 <?php if(isset($login['error'])) : ?>
  <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
 <?php endif; ?>
     <li>
       <label>
         Username :  <br>
         <input type="text" name="username" autofocus autocomplete="off" required>
       </label>
     </li>
     <li>
       <label>
         Password : <br>
         <input type="password" name="password"required>
       </label>
     </li>
      <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br>
    <button type="submit" name="login" size=>Log In</button>
   </ul>
       <a href="registrasi.php" class="registrasi">Registrasi / Daftar Akun !</a>
        <a href="halaman-depan.php" class="home">Kembali ke Halaman Depan</a>
  </div>
 </form>
 </div>
</body>
</html>
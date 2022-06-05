<?php 
require "functions.php";

// Jika tombol registasi di klik
if (isset($_POST['registrasi']))
{
  if (registrasi($_POST) > 0 )
  {
    echo "<script>
    alert('Selamat akun anda berhasil terdaftar, Silahkan Login');
    document.location.href = 'login.php';
  </script>";
  } else {
    echo "Akun gagal ditambahkan!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/registrasi.css">
  <title>Registrasi</title>
</head>
<body>
  <form action="" method="POST">
    <h3 class="heading">Form Registrasi</h3>
    <ul>
      <li>
        <label>
          Username : <br>
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Password : <br>
          <input type="password" name="password1" required>
        </label>
      </li>
      <li>
        <label>
          Konfirmasi Password : <br>
          <input type="password" name="password2" required>
        </label>
      </li>
      <li>
        <button type="submit" name="registrasi">Registrasi</button>
      </li>
      <a href="halaman-depan.php" class="home">Kembali ke Halaman Depan</a>
    </ul>
  </form>
</body>
</html>
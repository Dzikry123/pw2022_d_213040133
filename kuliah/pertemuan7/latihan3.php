<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
</head>
<body>

<!-- jika tombol submit belum di klik -->
<?php if( isset($_POST["submit"]) ): ?>
   <h1> Selamat datang <?= $_POST["nama"] ?></h1>
<?php endif; ?>

<!-- Jika metod menggunakan $_GET data tidak ditampilkan dilayar tapi ditampilkan di url nya dan sintaks post di latihan4 harus dirbubah jadi GET-->

<!-- atribut action (kosong) default = GET -->
<!--  atribut action (kosong) = tidak diisi url halaman lain, maka saat data dikirim akan kembali ke halaman awal -->

<form action="" method="post">
	Username :
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>


</form>


 </body>
</html>
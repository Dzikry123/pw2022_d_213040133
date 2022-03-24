<?php 
// check apakah tidak ada data di $_GET
if ( !isset($_GET ["nama"]) || 
	 !isset($_GET ["jenis-app"]) || 
	 !isset($_GET ["lisensi"]) ||
	 !isset($_GET ["developer"]) ) {
     
     // redirect
	header("Location: latihan1.php");
	exit;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Aplikasi</title>
</head>
<body>

<h1>Detail Aplikasi</h1>
<ul>
	<li><img src="img/<?= $_GET ["logo"]; ?>"></li>

	<li><?= $_GET ["nama"]; ?></li>
	<li><?= $_GET ["jenis-app"]; ?></li>
	<li><?= $_GET ["lisensi"]; ?></li>
	<li><?= $_GET ["developer"]; ?></li>

</ul>

<a href="latihan1.php">Kembali ke daftar aplikasi</a>

</body>
</html>
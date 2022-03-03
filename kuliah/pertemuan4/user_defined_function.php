<?php 
function salam( $waktu = "datang", $nama = "admin" ) {
	return "selamat $waktu $nama";
}

// nilai paramter default, berikan isi pada variabel di function

?>


<!DOCTYPE html>
<html>
<head>
	<title>Latihan user defined fucntion</title>
</head>
<body>

<!-- saat menuliskan isi function harus sama urutannya dengan function yang telah ditulis diatas atau di php nya -->
	<h1><?= salam("pagi"); ?></h1>

</body>
</html>
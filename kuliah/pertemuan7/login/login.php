<?php 
// apakah tombol sudah di klik
if (isset($_POST["submit"])) {

// check username & password
 if ($_POST["username"] == "admin" && $_POST["password"] == "123" ) {
// jika benar, redirect ke halaman admin 
 		header("Location: admin.php");
 		exit;
   }
// jika salah, tampilkan pesan kesalahan
   else {
   	$error = true;
   }
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<h1>Login admin</h1>

<?php if (isset($error) ) : ?>
<p style="color: red; font-style: italic;">Password salah !</p>
<?php endif; ?>
<ul>
   <form action="" method="post">
		<!-- dengan menggunakan for & id saat tulisan username di klik dapat mengaktifkan text input nya -->

	<li>
		<label for="user">Username :</label>
		<input type="text" name="username" id="user">
	</li>
	<li>
		<label for="password">password :</label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="submit">Kirim!</button>
	</li>

   </form>
</ul>



</body>
</html>
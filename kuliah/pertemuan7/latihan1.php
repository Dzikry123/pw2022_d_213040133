<?php 
// Variabel scope / lingkup variabel
// $x = 10;

// function tampilX() {
// 	global $x;

// 	echo $x;
// }

//tampilX();
// echo "<br>";
// echo $x;


// Variable superglobal
// Tipe array asosiatif

// $_GET
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// var_dump($_SERVER); > CONTOH VAR SUPERGLOBAL
?>
<?php $application = [
   [
	  "nama" => "Facebook",
	  "jenis-app" => "Sosial Media",
	  "lisensi" => "Free", 
	  "developer" => "Meta Platforms, Inc.",
	  "logo" => "Fb.jpg"
   ],

    [
	  "nama" => "Instagram",
	  "jenis-app" => "Sosial Media",
	  "lisensi" => "Free", 
	  "developer" => "Instagram",
	  "logo" => "Insta.jpg"
   ],

	 [
	  "nama" => "Ms Power Point",
	  "jenis-app" => "Produktivitas",
	  "lisensi" => "Berbayar", 
	  "developer" => "Microsoft Corporation",
	  "logo" => "power.png"
    ],
      [
      "nama" => "Ms Word",
	  "jenis-app" => "Produktivitas",
	  "lisensi" => "Berbayar", 
	  "developer" => "Microsoft Corporation",
	  "logo" => "word.png"
   ],

    [
      "nama" => "Twitter",
	  'jenis-app' => "Sosial Media",
	  "lisensi" => "Free", 
	  "developer" => "Twitter, Inc.",
	  "logo" => "Twitter2.jpg"
   ],

];

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>GET</title>
 </head>
 <body>
 
 <h1>Daftar Aplikasi</h1>

<ul>
<?php foreach ($application as $app) : ?>
    <li>
    	<a href="latihan2.php?nama=<?= $app["nama"];?>&jenis-app=<?= $app["jenis-app"]; ?>&lisensi=<?= $app["lisensi"]; ?>&developer=<?= $app["developer"] ?>"> <?= $app ["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>

 </body>
 </html>
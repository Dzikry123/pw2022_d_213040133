<?php 
// $mahasiswa = [
// 	["dzikry", "213040133", "Teknik Informatika", "adadeh@gmail.com"],
// 	["vaxy", "213040131", "Teknik Informatika", "vaxyh@gmail.com"],
// 	["xyper", "213040131", "Teknik Informatika", "xyper@gmail.com"]
// ];

// Array associative
// definisi = array, hanya beda pada keynya
// key nya kita yang buat sendiri


// urutan array dapat ditulis secara acak, yang penting urutan key yang dipanggilnya benar

//echo $mahasiswa[2]["tugas"][2];

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
 	<title>latihan2</title>
 </head>
 <body>
 
 <h1>Daftar Aplikasi</h1>

<?php foreach ($application as $app) : ?>

<ul>
	<li>
		<img src="img/<?= $app["logo"]; ?>">
	</li>
    <li>Nama : <?= $app ["nama"]; ?></li>
    <li>Jenis App : <?= $app ["jenis-app"]; ?></li>
    <li>Lisensi : <?= $app ["lisensi"]; ?></li>
    <li>Developer : <?= $app ["developer"]; ?></li>
</ul>
<?php endforeach; ?>

<!-- urutan array dapat ditulis secara acak, yang penting urutan key yang dipanggilnya benar -->
 </body>
 </html>










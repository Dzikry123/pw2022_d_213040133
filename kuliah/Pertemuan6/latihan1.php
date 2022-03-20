<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>

<!-- <?php 
// cara menampilkan array multi dimensi
//$angka = [[1,2,3], [4,5,6], [6,7,8]];
echo $angka[1][1];
    
?> -->

<?php 
$angka = [[1,2,3], [4,5,6], [7,8,9]];

 ?>

<?php foreach ($angka as $a ) : ?>
	<?php foreach ($a as $b ) : ?>
<div class="kotak"><?= $b; ?></div>
    <?php endforeach ?>
<?php endforeach ?>

</body>
</html>
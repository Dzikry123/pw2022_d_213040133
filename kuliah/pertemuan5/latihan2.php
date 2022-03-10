<?php 
// Pengulangan pada array
// for / foreach

$angka = [2,7,30,23,11,34,56,77];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 2</title>
 		
 		<style>
 			.kotak {
 				height: 50px;
 				width: 50px;
 				line-height: 50px;
 				background-color: salmon;
 				text-align: center;
 				margin : 3px;
 				float: left;
 			}

 			.clear{
 				clear: both;
 			}
 		</style>

 </head>
 <body>
 
 <?php for ( $i = 0; $i < count($angka); $i++) {  ?>
 	<div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<!-- foreach -->
<?php foreach ( $angka as $a ) {
 ?> <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach ($angka as $a) : ?>
	<div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

 </body>
 </html>
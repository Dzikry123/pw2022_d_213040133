<?php 
// Pengulangan

// for 
// while
// do.. while
// foreach ( khusus array )

// unsur dalam pengulangan
// nilai awal, kondisi terminasi, incerment/ decerment

// 1. for
// for ( $i = 0; $i < 5; $i++ ) {
// 	echo "HEllo <br>";
// }

// 2. while
// melakukan pengulangan saat kondisinya true

// $i = 0;
// while ( $i < 5) {
// 	echo "Helloww <br>";
// $i++;
// }

// 3. do.. while
// jalankan proses lalu check kondisinya / boolean nya

// ketika nilainya false block akan dijalankan 1x jika while tidak akan dijalankan


// $i = 0;
// do {
//   echo "Helloww <br>";
//  $i++;
// } while ( $i < 5);



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Table</title>

	<style>
		.warna-baris {
			background-color: pink;
		}
	</style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
	<!-- <?php 
		// for ( $i = 1 ; $i <=3; $i++) { 
			// echo "<tr>";
			// for ( $j = 1; $j <=5 ; $j++) { 
			   // echo "<td> $i, $j </td>";
			// }
			// echo "</tr>";
		// }
	 ?> -->

<!-- atau cara 2 -->


<?php
// cara menyingkat tulisan echo
// syarat : untuk display var dll
// <?= (isi variabel) 
// <?= $i $j
    for ($i = 1; $i <=5 ; $i++) : ?>
    	<?php if ($i % 2 == 0) : ?>
    		<tr class="warna-baris">
    	 <?php else : ?>
    	    <tr>
    	<?php endif; ?>
    	
    		<?php for ($j = 1; $j <=5 ; $j++) : 
    		 ?>
    		 <td> <?="$i, $j"; ?></td>
    		<?php endfor; ?>
    	</tr>

<?php endfor; ?>

</table>


</body>
</html>


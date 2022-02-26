<!-- <?php 
// $namaHero = "gen ";
// $level = 6;

// switch menulis singkat
//variabel = (kondisi) ? true : false;
//$skill = $level <= 4 ? $namaHero."belum memiliki skill" : $namaHero."sudah punya skill";
//menampilkan var ke layar
 // echo $skill;
// switch ($level) {
// 	case 2:
// 		echo "sudah naik";
// 		break;
// 	case 3:
// 	    echo "sudahsudah";
// 	    break;
// 	default:
// 		echo "error";
// 		break;
// }


?> -->


<!-- Ternary -->

<?php  
$nilai1 = 1;
$nilai2 = 2;
$nilai3 = 1;

//boolean = kondisi : kondisi 2;
echo ($nilai1 = $nilai3) ? "nilai sama" : " nilai tdk sama ";

// contoh 2
// strlen ( panjang warabel)

for ($x=0; $x <= 15  ; $x++) { 
// 15 dibagi 5 jadi setiap baris ada 5 angka
	echo $x % 5 == 0 ?
// jika 15  dibagi 5 = 1, setelah baris ke 5 akan menambahkan enter
// saat nilai = 1 digit maka didepannya akan ditambhakn angka 0
// lalu jika baris nya kurang dari 5 maka tidak akan ditambahkan enter dan berhenti.
	(strlen($x)  == 1 ? "0$x<br/>" : "$x<br>") :
	(strlen($x)  == 1 ? "0$x" : "$x");
}


?>
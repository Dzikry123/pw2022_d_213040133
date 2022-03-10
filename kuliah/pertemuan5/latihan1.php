<?php 
// Array
// Variabel yang dapat memiliki banyak nilai

// element didalam array boleh memiliki tipe data yang berbeda

//pasangan antara key dan value
// key nya adalah index yang dimulai dari 0

// membuat array

// 1. cara lama
$hari = array("senin", "selasa", "Rabu");
// 2. baru
$bulan = ["Januari", "februari"];

// element didalam array boleh memiliki tipe data yang berbeda
$arr1 = [13, "aku", true];


// menampilkan array
// var_dump
// print_r
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 element pada array 
// echo $arr1[1];
// echo "<br>";
// echo $bulan[1];

// menambahkan element baru pada array
var_dump($hari);
$hari[]  = "Kamis";
echo "<br>";
var_dump($hari);
$hari[]  = "Jum'at";
echo "<br>";
var_dump($hari);




 ?>
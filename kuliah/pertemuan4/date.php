<?php 
// function date

// Date

// l = hari
// d = tanggal
// M = bulan ( teks )
// m = bulan ( angka )
// Y = tahun

// echo date("l, d-M-Y")

// Time
// UNIX Timestamp / EPOCH Time
// waktu yang sudah berallu sejak 1 jan 1970

//echo time();
// time > detik * menit * jam * hari 
// time + tanggal maju kedepan
// time - mundur kebelakang
// echo date("d M Y", time()- 60*60*24*120);

// mktime 
// membuat sendiri detik nya dari 1970 batasnya
// paramteter ada 6 
// mk (0,0,0,0,0,0)
// (jam, menit, detik, bulan, tanggal, tahun)
// echo date("l", mktime(0,0,0,8,18,2002));

// strtotime
// echo date( "l", (strtotime ("5 aug 2021")) );



 ?>
<?php 
//session
session_start();

//jika session 'login' tidak ada maka :
if (!isset($_SESSION['login']))
{
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

// jika tidak ada id di url
if (!isset($_GET['id'])) 
{
  header("Location: index.php");
  exit;
}

if ( hapus ( $id ) > 0 ) {
  echo "<script> 
        alert( 'Data berhasil dihapus');
        document.location.href = 'index.php';
     </script>" ;
   } else {
     echo " Data tidak berhasil ditambahkan ";
   }

?>
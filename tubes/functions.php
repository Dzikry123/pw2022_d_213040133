<?php 

// koneksi ke DB & pilih database
function koneksi () 
{
  return mysqli_connect('localhost', 'root', '', 'tubes_213040133');
}
 // Query isi tabel dokter
 function query ($query)
{
    $conn = koneksi();
    
    $result = mysqli_query($conn, $query);
  
    // jika data hanya ada satu
    if (mysqli_num_rows($result) == 1 ) {
      return mysqli_fetch_assoc($result);
    }

     $rows = [];
 while ($row = mysqli_fetch_assoc($result)) {
   $rows [] = $row;
 }

   return $rows;
 }
 
 function upload()
 {
   $nama_file = $_FILES['gambar']['name'];
   $tipe_file = $_FILES['gambar']['type'];
   $ukuran_file = $_FILES['gambar']['size'];
   $error = $_FILES['gambar']['error'];
   $tmp_file = $_FILES['gambar']['tmp_name'];

   // ketika tidak ada gambar yang dipilih
   if($error == 4) {
    //  echo "<script>
    //         alert('pilih gambar terlebih dahulu')
    //        </script>";
    
    return 'nophoto.jpg';
   }
    // check ekstnesi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    
    //jika ekstensi file tidak sesuai dengan daftarfile yang diatas / yng tlh disediakan
    if(!in_array($ekstensi_file, $daftar_gambar)) {
      echo "<script>
            alert('file gambar yang anda pilih tidak dapat diupload')
           </script>";
    
    return false;
    }

    //check tipe file
    if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png' ) {
      echo "<script>
            alert('file gambar yang anda pilih tidak dapat diupload')
           </script>";
    
    return false;
    }

    //check ukuran file
    // maks 5mb = 50000000
    if ($ukuran_file > 5000000) {
      echo "<script>
            alert('ukuran file gambar yang anda pilih terlalu besar!')
           </script>";
    
    return false;
    }

    // lolos pengecekan
    // siap upload --> alurnya : pindahkan gambar dari $tmp_file ke folder img/ lalu nama file baru nya
    // generate nama file baru
    $nama_file_baru = uniqid();
    // concate(gabungkan) $nama_file_baru
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

    return $nama_file_baru;
  }

 function tambah($data) 
 {
   $conn = koneksi();

   $nama = htmlspecialchars ($data['nama']) ;
   $kode_dr = htmlspecialchars ($data['kode_dr']) ;
   $email = htmlspecialchars ($data['email']);
   $spesialis = htmlspecialchars ($data['spesialis']);
  //  $gambar = htmlspecialchars ($data['gambar']);

  // upload gambar
   $gambar = upload();
   if(!$gambar) {
     return false;
   }

   $query = "INSERT INTO
                dokter
              VALUES
              (null, '$nama', '$kode_dr', '$email', '$spesialis', '$gambar');
              ";

   mysqli_query($conn, $query) or die (mysqli_error($conn));
   
   // or die jika data gagal ditambahkan atau cara dua 
   // cara dua - jika data gagal ditambhakan
   
   //echo mysqli_error($conn);

   // untuk memberithau mysql yg berubah dimysql baik berambah,hilang/dihapus atau dimodifikasi
   return mysqli_affected_rows($conn);
 }

function hapus ($id) 
{
  $conn = koneksi();
  
  // menghapus gambar di folder img
  $dr = query("SELECT * FROM dokter  WHERE id = $id");
  if($dr['gambar'] != 'nophoto.jpg') {
  unlink('img/' . $dr['gambar']);
  }
  mysqli_query($conn, "DELETE FROM dokter WHERE id = $id") or die (mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data) 
 {
   $conn = koneksi();
   
   $id = htmlspecialchars ($data['id']) ;
   $nama = htmlspecialchars ($data['nama']) ;
   $kode_dr = htmlspecialchars ($data['kode_dr']) ;
   $email = htmlspecialchars ($data['email']);
   $spesialis = htmlspecialchars ($data['spesialis']);
   $gambar_lama = htmlspecialchars ($data['gambar_lama']);


   $gambar = upload();
   if (!$gambar) {
     return false;
   }

   if($gambar == 'nophoto.jpg') {
     $gambar = $gambar_lama;
   }

   $query = "UPDATE dokter SET
              nama = '$nama',
              kode_dr = '$kode_dr',
              email = '$email',
              spesialis = '$spesialis',
              gambar = '$gambar_lama'

              WHERE id = $id";

   mysqli_query($conn, $query) or die (mysqli_error($conn));
   
   // or die jika data gagal diubah atau cara dua 
   // cara dua - jika data gagal diubah
   
   //echo mysqli_error($conn);

   // untuk memberithau mysql yg berubah dimysql baik berambah,hilang/dihapus atau dimodifikasi
   return mysqli_affected_rows($conn);
 }

 function cari($keyword)
 {
   $conn = koneksi();
  
   $query = "SELECT * FROM dokter
              WHERE nama LIKE '%$keyword%' OR
              kode_dr LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              spesialis LIKE '%$keyword%' ";

   $result = mysqli_query($conn, $query);

   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
     $rows [] = $row;
   }
  
     return $rows;
  }
 
  function login ($data)
  {
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // check dulu username
    if ($user= query("SELECT * FROM user WHERE username = '$username' ")) {
    
    // check password
    if (password_verify($password, $user['password'])) {
 
      // set session
      $_SESSION['login'] = true;
      
      header("Location: index.php");
      exit;
      }
    }
      return [
        'error' => true,
        'pesan' => 'Username / Password salah !'
      ];
  }
  
  function registrasi($data)
  {
    $conn = koneksi();

    $username = htmlspecialchars (strtolower ($data['username']) );
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    //jika username & password kosong
    if ( empty($username) || empty($password1) || empty($password2))
    {
      echo "<script>
              alert('username & password tidak boleh kosong');
              document.location.href = 'registrasi.php';
            </script>";

    return false;
    }

    // jika usernmae sudah ada di database
    if ( query("SELECT * FROM user WHERE username = '$username' "))
    {
      echo "<script>
              alert('username sudah terdaftar');
              document.location.href = 'registrasi.php';
            </script>";

    return false;
    }
    
    //jika konfrimasi passsword tidak sama
    if ($password1 !== $password2 )
    {
      echo "<script>
              alert('Password tidak sesuai');
              document.location.href = 'registrasi.php';
            </script>";

    return false;
    }

    // Jika password < 5 digit
    if (strlen($password1) < 5 )
    {
      echo "<script>
              alert('Password terlalu pendek');
              document.location.href = 'registrasi.php';
            </script>";

    return false;
    }

    // Jika username & password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);

    // Insert ke table user
    $query = "INSERT INTO user
    VALUES
    (null, '$username', '$password_baru')
    ";
    
    mysqli_query($conn, $query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
  }



 ?>

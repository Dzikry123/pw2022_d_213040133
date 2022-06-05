<?php 
require "../functions.php";

// ketika tombol cari di klik
  $dokter = cari ($_GET['keyword']);
?>

<table border="0" cellpadding="10" cellspacing="0" >
    <!-- ntuk spesialis itu sprt dokter umum / spesialis -->
    <tr>
      <th>Nomor</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php if(empty($dokter)) :?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">Data tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>
  <?php $i = 1; foreach( $dokter as $dr) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $dr['gambar']; ?>"></td>
      <td><?= $dr['nama']; ?></td>
      <td>
        <a href="detail.php?id=<?= $dr['id']; ?>">lihat detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
    
  </table>
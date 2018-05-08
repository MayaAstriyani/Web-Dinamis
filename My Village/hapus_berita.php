<?php
require 'proses_berita.php';
$ID = $_GET["ID"];
if ( hapus($ID) > 0) {
  echo "
  <script>
    alert('Data berhasil dihapus!!');
    document.location.replace('konten.php');
  </script>
  ";
}else {
  echo "
  <script>
    alert('Gagal!!!');
  </script>
  ";
}

 ?>

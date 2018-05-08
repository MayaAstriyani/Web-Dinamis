<?php
require 'proses_tambah.php';
if (isset($_POST["submit"])) {
// cek data berhasil ditamabahkan atau tidak
if ( tambah($_POST) > 0) {
  echo "
  <script>
    alert('Akun Berhasil Ditambah!!!');
    document.location.href= 'login.php';
  </script>
  ";
}else {
  echo "
  <script>
    alert('Silahkan Cek Kembali!!!');
  </script>
  ";
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
    <link rel="stylesheet" href="css/styletambah.css">

  <body>
    <?php if (isset($_GET['error'])): ?>
      <script>
        alert("Gagal Membuat!!!")
      </script>
    <?php endif; ?>

    <div class="Loginbox">

      <img src="logo.png" alt="" class="avatar">
      <h2>Buat Akun Baru!!!</h2>

      <form class="" action="" method="post">

        <input type="text" name="nama" value="" required placeholder="Nama"><br>
        <input type="Text" name="email" value="" required placeholder="Email"><br>
        <input type="password" name="password" required value="" placeholder="Password"><br>
        <button type="submit" name="submit">Tambah Akun</button><br><br>
        <a href="login.php">Sudah punya akun?</a><br>
      </form>

    </div>
  </body>
</html>

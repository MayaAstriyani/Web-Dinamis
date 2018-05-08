<?php
  $conn = mysqli_connect("localhost", "root", "", "webdesa");
  if( isset($_POST["submit"])){
    $Judul = $_POST["Judul"];
    $Penulis = $_POST["Penulis"];
    $Isi = $_POST["Isi"];
    $query = "INSERT INTO artikel VALUES ('','$Judul','$Penulis','$Isi')";
    mysqli_query($conn, $query);
    if ( ($_POST) > 0) {
      echo "
      <script>
        alert('Berita Berhasil Ditambah!!!');
        document.location.href= 'konten.php';
      </script>
      ";
    }else {
      echo "
      <script>
        alert('Mohon Cek Lagi');
        document.location.href='Tambah_berita.php';
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
    <link rel="stylesheet" href="login.css">
  <body>
        <div class="login-page">
          <div class="form">
            <div class="box">
              <h1>BERITA</h1>
              <form class="login-form" action="" method="post">
                <input type="text" placeholder="Judul" name="Judul"/>
                <input type="text" placeholder="Penulis " name="Penulis"/>
                <input type="text" placeholder="Isi" name="Isi"/>
                <button type="submit" name="submit">Kirim</button>
                <p class="message"><a href="konten.php">Kembali</a></p>
              </form>
          </div>
          </div>
        </div>
  </body>
</html>

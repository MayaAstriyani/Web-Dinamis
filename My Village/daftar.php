<?php
  $conn = mysqli_connect("localhost", "root", "", "webdesa");
  if( isset($_POST["submit"])){
    $Nama = $_POST["nama"];
    $Email = $_POST["email"];
    $Password = $_POST["password"];
    $query = "INSERT INTO user VALUES ('', '$Nama', '$Email', '$Password')";
    mysqli_query($conn, $query);
    if ( ($_POST) > 0) {
      echo "
      <script>
        alert('Akun Berhasil Ditambah!!!');
        document.location.href= 'login.php';
      </script>
      ";
    }else {
      echo "
      <script>
        alert('Mohon Cek Lagi');
        document.location.href='daftar.php';
      </script>
      ";
      }

  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar</title>
  </head>
    <link rel="stylesheet" href="login.css">
  <body>
        <div class="login-page">
          <div class="form">
            <div class="box">
              <h1>DAFTAR</h1>
              <form class="login-form" action="" method="post">
              <input type="text" placeholder="Nama" name="nama"/>
              <input type="text" placeholder="Email Addres" name="email"/>
              <input type="password" placeholder="Password" name="password"/>
              <button type="submit" name="submit">Submit</button>
              <p class="message">Sudah punya akun? <a href="login.php">Login</a></p>
            </div>
            </form>
          </div>
        </div>
  </body>
</html>

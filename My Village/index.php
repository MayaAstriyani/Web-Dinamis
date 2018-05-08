<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
    <link rel="stylesheet" href="login.css">
  <body>
    <div class="loginbox">
      <h1>Login Here</h1>
      <form>
        <p>Username</p>
        <input type="text" name="" placeholder="Enter Username">
        <p>Password</p>
        <input type="text" name="" placeholder="Enter Password">
        <input type="submit" name="" value="Login">
        <p>Belum punya akun ?</p>
        <a href="daftar.php"> Buat akun ?</a>

      </form>
    </div>
    <?php if (isset($_GET['error'])): ?>
      <script>
        alert("Gagal Login!!!");
      </script>
    <?php endif; ?>

    <div class="login-page">
      <div class="form">
        <form class="login-form" action="proses_login.php" method="post">
          <input type="text" required name="Nama" value="" autocomplete="off" placeholder="Nama" autofocus>
          <input type="Password" required name="Password" value="" autocomplete="off" placeholder="Password">
          <button type="submit" name="button">Login</button>
          <!-- <p style="color:white; font-size:12px;">Utk percobaan silahkan isi di kolom Nama dan Pasword = admin</p> -->
          <p class="message">Belum Punya Akun? <a href="daftar.php">Buat Akun</a></p>
        </form>
      </div>
    </div>
  </body>
</html>

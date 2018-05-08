<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
    <link rel="stylesheet" href="login.css">
  <body>
    <?php if (isset($_GET['error'])): ?>
      <script>
        alert("Gagal Login!!!")
      </script>
    <?php endif; ?>
    <form class="" action="proses_login.php" method="post">
      <div class="box">
        <h1>LOGIN</h1>
        <input type="text" name="nama" placeholder="Enter Username"value="">
        <input type="password" name="password" placeholder="Enter password"value="">
        <button type="submit" name="button">Login</button><br>
          <p>Belum punya akun? <span><a href="daftar.php">Daftar</span></p>
      </div>

    </form>
  </body>
</html>

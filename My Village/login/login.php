<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
 <link rel="stylesheet" href="stylelogin.css">
</head>
<style>
.ratna{
  width:auto;
  height:auto;
}
body{
  padding:0;
  margin:0;
  background-image: url("kayu.PNG");
}
.inner-container{
  margin-bottom: 100px;
  min-height: 500px;
  margin-top: 450px;
  width:400px;
  height:200px;
  position:absolute;
  top:calc(50vh - 200px);
  left:calc(50vw - 200px);
  overflow:hidden;
}
.box{
  position:absolute;
  height:100%;
  width:100%;
  font-family:Helvetica;
  color:#fff;
  background:rgba(0,0,0,0.13);
  padding:30px 0px;
}
.box h1{
  text-align:center;
  margin:30px 0;
  font-size:30px;
}
.box input{
  display:block;
  width:300px;
  margin:20px auto;
  padding:15px;
  background:rgba(0,0,0,0.2);
  color:#fff;
  border:0;
}
.box input:focus,.box input:active,.box button:focus,.box button:active{
  outline:none;
}
.box button{
  background:#742ECC;
  border:0;
  color:#fff;
  padding:10px;
  font-size:20px;
  width:330px;
  margin:20px auto;
  display:block;
  cursor:pointer;
}
.box button:hover{
  background: #000;
}
.box button:active{
  background:#27ae60;
}
.box p{
  font-size:14px;
  text-align:center;
}
.box p span{
  cursor:pointer;
  color:#666;
}
</style>

<body>
  <?php if (isset($_GET['error'])): ?>
    <script>
      alert("Login gagal,pastikan password anda benar.");
    </script>
  <?php endif; ?>

<div class="login">
  <img src="banjarmangu.PNG" class="ratna">
<center>

    <h2 class="login-header">Selamat Datang Di Web Desa Banjarmangu</h2>
    <div class="inner-container">
        <form class="login-container" method="post" action="proses_login.php">
          <div class="box">
            <h1>Login</h1>
              <input type="text" required name="Nama" value="" autocomplete="off" placeholder="Nama">
              <input type="Password" required name="Password" value="" autocomplete="off" placeholder="password"><br> <br>
              <input type="submit" value="Log in">
              <p>Not a member? <span><a href="adduser.php">Sign Up</span></p>
          </div>
        </div>
        </form>
      </center>
</div>
<br><br><br><br>
</body>
</html>

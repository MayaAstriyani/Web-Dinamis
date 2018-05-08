<?php
require 'proses_berita.php';
// ambil dat di url--
$ID = $_GET["ID"];
// query data mahasiswa berdasarka ID
$artikel =query("SELECT *FROM artikel WHERE ID = $ID")[0];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berita</title>
    <link href="bootstrap.min.css" rel="stylesheet">
<style media="screen">
*{
  padding: 0;
  margin: 0;
}
.navbar{
  padding: 0;
  margin: 0;
}
ul {
text-decoration: none;
list-style-type: none;
margin: 5px;
padding: 5px;
overflow: hidden;
background-color: black;
}

li {
float: left;
}

li a {
margin-left:100px;
display: inline-block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}
a:hover{
transition:1s;
background-color:white;
color:black;
text-decoration: none;
}

.satu a img{
  transition: 1s;
  width: 480px;
}
.dua a img{
  transition: 1s;
  width: 500px;
}
.tiga a img{
    width: 400px;
}
.empat a img{
    height: 152px;
    width: 250px;
}
.lima a img{
    height: 150px
}
.jumbotron{
  height: 200px;
  width: 100%;
}
.container h1{
  font-size: 20px;
}
.thumbnail{
  height: 350px;
}
</style>

  </head>
  <body>
    <div class="jumbotron">

      <ul class="navbar navbar-fixed-top">
        <li><a class="active" href="webdesa.php">Home</a></li>
        <li><a href="my biodata.html">About Me</a></li>
        <li><a href="sejarah.html">Sejarah Desa</a></li>
        <li><a href="Struktur.html">Struktur Desa</a></li>
        <li><a href="galeri.php">Galeri</a></li>
        <li><a href="artikel">Berita</a></li>
        <li><a href="login.php" onclick="return confirm('Anda yakin ingin keluar?');">Log out</a></li>
      </ul>
      <h1 class="text-center"><?= $artikel["Judul"]; ?></h1>
      <img src="" alt="">
      <p class="text-center">Ditulis Oleh : <?=$artikel["Penulis"];  ?></p>
      <section id="main">
        <div class="conatiner">
          <div class="box thubmnail col-md 8">
            <article class="" id="main-col">
                <p><?= $artikel["Isi"];  ?></p><br><br><br>
                <p></p>
                <h5><a href="konten.php">Kembali</a></h5>
            </article>
          </div>
        </div>
      </section>

    </div>
  </body>
</html>

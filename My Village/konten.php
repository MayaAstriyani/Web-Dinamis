<?php
require 'proses_berita.php';
$artikel = query("SELECT * FROM artikel ORDER BY ID DESC");
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
        <li><a href="artikel.php">Berita</a></li>
        <li><a href="login.php" onclick="return confirm('Anda yakin ingin keluar?');">Log out</a></li>
      </ul>
      <h1 class="text-center">BERITA DESA</h1>
      <img src="" alt="">
      <p class="text-center">Informatif | Aktualis | Terpercaya</p>
      <div class="" style="transform:translateY(-20px); background:black; width:150px; text-decoration:none; height:30px; font-size:20px; border-radius:10px;">
        <a href="Tambah_berita.php">Tambah Berita </a>
        </div>
    </div>
    <article class="" id="main-col">
        <?php $i = 1; foreach ( $artikel as $row ) : ?>
          <?php if ($i == 1): ?>
            <div class="box col-md 3 thumbnail text-center">
              <div class="new">
                <!-- <img src="" alt=""> -->
                <h3><?= $row["Judul"]; ?></h3>
                <p>Di tulis oleh : <?= $row["Penulis"];  ?></p><hr>
                <p><?= substr($row["Isi"],0, 40);  ?>....</p>
                <a href="klikberita.php?ID=<?= $row["ID"];?>" style="text-decoration:none;"><button type="button" name="button">Read-more</button></a><br>
                <a href="hapus_berita.php?ID=<?= $row["ID"];?>" onclick="return confirm('Yakin Ingin Dihapus?');">Hapus<i class="fa fa-trash fa-fw"></i></a> |
                <a href="ubah_berita.php?ID=<?= $row["ID"];?>" style="text-decoration:none;">Edit Berita</a><br>
              </div>
            </div>
            <?php $i++; else: ?>
              <section id="boxes">
                  <div class="box col-md-3 thumbnail text-center">
                    <div class="last">
                      <!-- <img src="" alt=""> -->
                      <h3><?= $row["Judul"]; ?></h3>
                      <p>Di tulis oleh : <?= $row["Penulis"];  ?></p><hr>
                      <p><?= substr($row["Isi"],0, 40);  ?>....</p>
                      <a href="klikberita.php?ID=<?= $row["ID"];?>" style="text-decoration:none;"><button type="button" name="button">Read-more</button></a><br>
                <a href="hapus_berita.php?ID=<?= $row["ID"];?>" onclick="return confirm('Yakin Ingin Dihapus?');">hapus<i class="fa fa-trash fa-fw"></i></a>
                    </div>
                  </div
              </section>
          <?php endif; ?>
        <?php endforeach; ?>

    </article>
  </body>
</html>

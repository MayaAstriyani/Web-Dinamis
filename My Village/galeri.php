<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galeri</title>
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
        <li><a href="konten.php">Berita</a></li>
        <li><a href="login.php" onclick="return confirm('Anda yakin ingin keluar?');">Log out</a></li>
      </ul>
      <h1 class="text-center">Galeri Desa Adipasir</h1>
      <img src="" alt="">
      <p class="text-center">Partisipasi | Adil | Semangat</p>
    </div>
    <div class="container">
      <div class="text-center">
        <h3>Video Kegiatan Karnaval</h3>
        <video src="video.mp4" poster="posterimage.jpg" controls="" style="width:700px; margin-left:100px;">
        </video>
      </div>
      <h3 class="text-center">Foto foto kegiatan desa <hr></h3>
      <div class="col-md-3 thumbnail satu">
        <a href="#">
          <img src="Makam Adipati Anom.JPG" alt="">
        </a>
          <div class="text-center">
            <h1>Makam Adipati Anom</h1>
            <p>Makam Adipati Anom terletak di desa Asipasir rt 07/ rw 02.
            Konon ceritanya Adipati Anom adalah penemu Desa Adipasir</p>
          </div>
      </div>
      <div class="col-md-3 thumbnail dua">
        <a href="#">
          <img src="karnaval.jpg" alt="">
        </a>
        <div class="text-center">
          <h1>Karnaval</h1>
          <p>Karnaval di desa Adipasir biasa diadakan pada tanggal 18 Agustus dalam rangka memperingati HUT RI. Karnaval ini diikuti oleh
          seluruh warga Adipasir termasuk seluruh sekolah yang ada di desa Adipasir</p>
        </div>
      </div>
      <div class="col-md-3 thumbnail tiga">
        <a href="#">
          <img src="petani petik melati.jpg" alt="">
        </a>
        <div class="text-center">
          <h1>Bertani</h1>
          <p>Kegiatan memetik bunga melati yang dilakukan oleh para petani perempuan</p>
        </div>
      </div>
      <div class="col-md-3 thumbnail empat">
        <a href="#">
          <img src="Watu Gombang.JPG" alt="">
        </a>
        <div class="text-center">
          <h1>Watu Gombong</h1>
          <p>Watu gombang ini konon digunakan Adipati Anom beserta 4 sahabatnya untuk tempat mencuci pusaka seperti keris, tombak, dll. Menurut penuturan penduduk sekitar, watu tersebut sering berputar dan berubah arah, serta batu ini juga dipercayai tidak mempunyai dasar atau tidak berujung. </p>
        </div>
      </div>
      <div class="col-md-3 thumbnail lima">
        <a href="#">
          <img src="embeg.JPG" alt="">
        </a>
        <div class="text-center">
            <h1>Embeg</h1>
            <p>Kesenian embeg di desa Adipasir biasa diadakan ketika ada orang yang hajatan, pernikahan, dan lain lain </p>
        </div>
      </div>
      <div class="col-md-3 thumbnail enam">
        <a href="#">
          <img src="bantuan.jpg" alt="">
        </a>
        <div class="text-center">
            <h1>Bantuan</h1>
            <p>Polsek Rakit memberikan bantuan kepada rumah warga yang roboh terkena hujan deras</p>
        </div>
      </div>
      <div class="col-md-3 thumbnail tujuh">
        <a href="#">
          <img src="peresmian.jpg" alt="">
        </a>
        <div class="text-center">
            <h1>Pemerintahan</h1>
            <p>Peresmian pelatihan bordir untuk warga di Balai Desa Adipasir oleh pemerintah Provinsi Jawa Tengah  </p>
        </div>
      </div>
      <div class="col-md-3 thumbnail tujuh">
        <a href="#">
          <img src="kolam.jpg" alt="">
        </a>
        <div class="text-center">
            <h1>Refresing</h1>
            <p>Desa Adipasir mempunyai tempat refresing yaitu kolam renang yang terletak di Adipasir bagian Utara</p>
        </div>

    </div>
  </body>
</html>

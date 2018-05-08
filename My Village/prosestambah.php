<?php// mengkoneksikan ke Databases
$conn = mysqli_connect("localhost", "root", "", "webdesa");

function tambah($post){
  global $conn;
  $Judul = htmlspecialchars($post["Judul"]);
  $Penulis = htmlspecialchars($post["Penulis"]);
  $Isi = htmlspecialchars($post["Isi"]);

  // query insert data
  $query = "INSERT INTO user
              VALUES
              ('','$Judul', '$Penulis','$Isi')
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
  }



 ?>

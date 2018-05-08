<?php
// mengkoneksikan ke Databases
$conn = mysqli_connect("localhost", "root", "", "webdesa");

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

  // HAPUS  Aartikel
  function hapus($ID){
     global $conn;
     mysqli_query($conn,"DELETE FROM artikel WHERE ID = $ID");
     return mysqli_affected_rows($conn);

  }

  // HAPUS USER
  function Busek($id){
     global $conn;
     mysqli_query($conn,"DELETE FROM user WHERE ID = $id");
     return mysqli_affected_rows($conn);
  }


// Edit Berita
  function ubah($data){
    global $conn;
    $ID       = $data["ID"];
    $Judul    = htmlspecialchars($data["Judul"]);
    $Penulis  = htmlspecialchars($data["Penulis"]);
    $Isi      = htmlspecialchars($data["Isi"]);

    // query UPDATE data
    $query = "UPDATE artikel SET
                Judul     = '$Judul',
                Penulis   = '$Penulis',
                Isi       = '$Isi'
                WHERE ID = $ID
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

  }

  // Edit Berita
    function Edit($data){
      global $conn;
      $ID       = $data["id"];
      $Judul    = htmlspecialchars($data["nama"]);
      $Penulis  = htmlspecialchars($data["email"]);
      $Isi      = htmlspecialchars($data["password"]);

      // query UPDATE data
      $query = "UPDATE user SET
                  nama     = '$Judul',
                  email   = '$Penulis',
                  password       = '$Isi'
                  WHERE id = $ID
                  ";
      mysqli_query($conn, $query);
      return mysqli_affected_rows($conn);

    }

 ?>

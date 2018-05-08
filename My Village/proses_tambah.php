<?php
// mengkoneksikan ke Databases
$conn = mysqli_connect("localhost", "root", "", "webdesa");

function tambah($post){
  global $conn;
  $nama = htmlspecialchars($post["nama"]);
  $email = htmlspecialchars($post["email"]);
  $password = htmlspecialchars($post["password"]);

  // query insert data
  $query = "INSERT INTO user
              VALUES
              ('','$nama', '$email','$password')
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
  }

  
 ?>

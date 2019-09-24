<?php
// import koneksi
include_once("config.php");

// mengambil dATA id dari yang diakses saat membuka halaman ini, id berupa data username 
$id = $_GET['id'];

// suqeri untuk menghapus data
$result = mysqli_query($mysqli, "DELETE FROM user WHERE username = '$id'");

// setelah proses menhapus maka akan langsung diarahkan ke halaman awal
header("Location:index.php");
?>

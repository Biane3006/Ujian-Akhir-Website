<?php
session_start();
require 'koneksi.php';
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$result = mysqli_query($koneksi, "SELECT * FROM akun WHERE Username='$username'");
$row = mysqli_fetch_assoc($result);

//Memeriksa apakah ada 1 baris data yang muncul dari Hasil QUERY
if(mysqli_num_rows($result) === 1){
  //Enkripsi Password
  if(password_verify($password, $row['Password'])){
    $_SESSION['Login'] = $row["Username"];
    $_SESSION['Role'] = $row["Role"];
    //Fungsi SESSION Nisn untuk membedakan setiap akun siswa (relasi 1 to 1)
    //1 siswa hanya memiliki 1 akun, dan satu akun hanya dimiliki oleh 1 siswa
    $_SESSION['Nisn'] = $row["nisn"];
    if($_SESSION['Role'] === "admin"){
      header("Location: admin/dashboard.php");
    }else{
      header("Location: user/dashboard.php");
    }
  }else{
    $_SESSION['Status'] = "Password_Salah";
    header("Location: login.php");
  }
}else{
  $_SESSION['Status'] = "Username_Tidak_Ditemukan";
  header("Location: login.php");
}
?>
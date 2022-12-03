<?php
session_start();
if(isset($_SESSION['Login'])){
  if($_SESSION['Role'] === "admin"){
    header("Location: admin/dashboard.php");
  }else{
    header("Location: user/dashboard.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="icon" href="assets/gambar/logo.ico">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
  </head>
  <body>
    <div class="center">
      <img src="assets/gambar/logo.png">
      <h1>SMA 4 Samarinda</h1>
      <?php
        if(isset($_SESSION['Status'])){
          if($_SESSION['Status'] === "Username_Tidak_Ditemukan" || $_SESSION['Status'] === "Password_Salah"){
              echo "
                  <p style='color: red; margin-top: 10px; text-align: center;'>
                      Username dan Password Salah!!!
                  </p>
              ";
              //Mengahpus SESSION Status Jika sudah menampilkan Pesan
              unset($_SESSION['Status']);
          }
        }
      ?>
      <form action="proses_login.php" method="post">
        <div class="txt_field">
          <input type="text" name="username" value="" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" value="" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link"></div>
      </form>
    </div>

  </body>
</html>

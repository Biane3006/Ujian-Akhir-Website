<?php

session_start();
if(isset($_SESSION['Login'])){
  if($_SESSION['Role'] === "admin"){
    //Masuk Ke HTML dibawah
  }else{
    header("Location: ../user/dashboard.php");
  }
}else{
  header("Location: ../login.php");
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="icon" type="icon" href="../assets/gambar/logo.ico">
    <title>Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
      <a class="navbar-brand" href="">Selamat Datang Admin | SMAN 4 SAMARINDA</a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0 bg-secondary" type="submit">Search</button>
          <div class="icon ml-4 ">
          <h5>
          <a class="nav-linked text-dark mr-2" href="#"><i class="fa fa-bell mr-1" data-toogle="tooltip" title="Notifikasi"></i></a>
            <a class="nav-linked text-dark mr-2" href="#"><i class="fa fa-envelope mr-1" data-toogle="tooltip" title="Surat Masuk"></i></a>
            <a class="nav-linked text-dark mr-2" href="../logout.php"><i class="fa-solid fa-right-from-bracket mr-1" data-toogle="tooltip" title="Logout"></i></a>
          </h5>
        </div>
        </form>
      </div>
    </nav>


    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="dashboard.php"><i class="fa-solid fa-house mr-2"></i>Dashboard</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="daftar_siswa.php"><i class="fa-solid fa-user-graduate mr-2"></i>Daftar Siswa</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-chalkboard-user mr-2"></i>Daftar Guru</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fa-regular fa-calendar-days mr-2"></i>Jadwal Sekolah</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-paper-plane mr-2"></i>Nilai Siswa</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-newspaper mr-2"></i>Berita</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-user mr-2"></i>Akun</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>


      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fa-solid fa-house mr-2"></i>DASHBOARD</h3><hr>

        <div class="row text-white">
          <div class="card bg-info ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa-solid fa-user-graduate mr-2"></i>
              </div>
              <h5 class="card-title">JUMLAH SISWA</h5>
              <div class="display-4">500</div>
              <a href="daftar_siswa.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-info ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa-solid fa-chalkboard-user mr-2"></i>
              </div>
              <h5 class="card-title">JUMLAH GURU</h5>
              <div class="display-4">50</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assets/js/admin.js"></script>
  </body>
</html>

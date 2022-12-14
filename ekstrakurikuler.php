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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA Negeri 4 Samarinda</title>
    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Link CSS Font Awesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <!-- Link CSS Buatan Sendiri -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="icon" href="assets/gambar/logo.ico">
</head>
<body>
    <section id="Bar_Atas">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="Contact_Atas">
                        <li><a href=""><i class="fas fa-phone"></i>0210-0000-0000-0000</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i>sarulaja300603@gmail.com</a></li>
                        <li><a href=""><i class="fas fa-bullhorn"></i>PPDB TA 2022/2023</a></li>
                    </ul>
                </div>


                <div class="col-md-3">
                    <ul class="sosmed">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="brand">
                        <img src="assets/gambar/logo.png" alt="">
                        <div class="brand-name">
                            <h1>SMA NEGERI 4 SAMARINDA</h1>
                            <h3>Satukanlah Langkah, Cita Cinta, Karya dan Nurani Untuk SMAPA</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 bungkusan-searchbox">
                    <div class="searchbox">
                        <form method="get">
                            <div class="input-group">
                                <input class="form-control" type="text" name="cari" placeholder="Cari Seusatu..." 
                                aria-label="Tombol Cari" aria-describedby="tombol-cari">
                                <div class="input-ground-append">
                                    <button class="btn btn-utama" id="tombol-cari">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-biru">
        <div class="container">
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false" role="button">Profil Sekolah</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Profil</a>
                            <a class="dropdown-item" href="#">Visi dan Misi</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Tenaga Pengajar.php">Tenaga Pengajar<span class="sr-only">(Current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="ekstrakurikuler.php">Ekstrakulikuler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prestasi.php">Prestasi<span class="sr-only">(Current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false" role="button">Berita</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Pengumuman</a>
                            <a class="dropdown-item" href="#">Agenda</a>
                            <a class="dropdown-item" href="#">Kalender Akademik</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>

    <section id="ekstrakurikuler">
        <div class="container">
            <div class="section-title">
                <h2>Ekstrakurikuler</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <div class="row row-2">
                                <div class="col-md-3">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>Praja Muda Karana</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <div class="row row-2">
                                <div class="col-md-3">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>Palang Merah Remaja</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <div class="row row-2">
                                <div class="col-md-3">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>Smapa Math Community (SMC)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <div class="row row-2">
                                <div class="col-md-3">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>Pasukan Pengibar Bendera (PASKIB)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <div class="row row-2">
                                <div class="col-md-3">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>English Club (EC)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <div class="row row-2">
                                <div class="col-md-3">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>Futbol Sala (Futsal)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-col">
                        <div class="brand">
                            <img src="assets/gambar/logo.png" alt="Logo">
                            <h1>SMA Negeri 4 Samarinda</h1>
                        </div>
                        <p class="tentang">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat 
                            ex optio nulla sequi, impedit doloribus labore nihil neque accusantium non 
                            porro aliquam veniam voluptatum, sit ad, minima voluptates rem qui.
                        </p>
                        <ul class="sosmed">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-col">
                        <h2>Kontak Kami</h2>
                        <p class="alamat">Jl. KH. Harun Nafsi No.40, Rapak Dalam,
                        Kec. Loa Janan Ilir, Kota Samarinda, Kalimantan Timur 75242</p>
                        <ul class="kontak">
                            <li><i class="fas fa-envelope"></i>Email : SMAN4Samarinda@gmail.com</li>
                            <li><i class="fas fa-phone"></i>Telp : 0000-0000-0000</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-col">
                        <h2>Navigasi</h2>
                        <ul class="footer-nav">
                            <li><a href="">Profil</a></li>
                            <li><a href="">Visi dan Misi</a></li>
                            <li><a href="">Struktur Organisasi</a></li>
                            <li><a href="">Pendaftaran PPDB 2023 <span>info</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container text-center">
                <h6>Hak cipta dilindungi ?? 2022</h6>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
<?php
require '../koneksi.php';
session_start();
if(isset($_SESSION['Login'])){
  if($_SESSION['Role'] === "admin"){
    //Memeriksa apakah ada keyword yang dicari
    if (isset($_POST['cari'])) {
      $cari = $_POST['keyword'];
      $select = mysqli_query($koneksi, "SELECT * FROM siswa WHERE Nisn LIKE '%$cari%' OR Nama LIKE '%$cari%' OR Jenis_Kelamin LIKE '%$cari%' OR Tempat_Lahir LIKE '%$cari%' OR Tanggal_Lahir LIKE '%$cari%'");
    }else {
      $select = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY Nisn ASC");
    }
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
      <a class="navbar-brand" href="#">Selamat Datang Admin | SMAN 4 SAMARINDA</a>
        <form class="form-inline my-2 my-lg-0 ml-auto" method="post">
          <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button name="cari" class="btn btn-outline-dark my-2 my-sm-0 bg-secondary" type="submit">Search</button>
        </form>
        <div class="icon ml-4">
          <h5>
            <a class="nav-linked text-dark mr-2" href="#"><i class="fa fa-bell mr-1" data-toogle="tooltip" title="Notifikasi"></i></a>
            <a class="nav-linked text-dark mr-2" href="#"><i class="fa fa-envelope mr-1" data-toogle="tooltip" title="Surat Masuk"></i></a>
            <a class="nav-linked text-dark mr-2" href="../logout.php"><i class="fa-solid fa-right-from-bracket mr-1" data-toogle="tooltip" title="Logout"></i></a>
          </h5>
        </div>
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

<!-- ISI DAFTAR_SISWA -->
      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fa-solid fa-user-graduate mr-2"></i>DAFTAR SISWA</h3><hr>
        <div class="container">
        <!-- Button trigger modal -->
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#TambahData"><i class="fa-solid fa-user-plus mr-2"></i>Tambah Data</button>
            <!-- Modal Tambah Data -->
            <div class="modal fade" id="TambahData" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">INPUT DATA SISWA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">

                      <div class="form-group">
                        <label>NISN</label>
                        <input type="number" name="nisn" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>Foto Siswa</label>
                        <input type="file" name="foto" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>Nama Lengkap Siswa</label>
                        <input type="text" name="nama_siswa" class="form-control" required>
                      </div>

                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="jenkel">
                          <input class="form-check-input ml-2" type="radio" name="jenkel" id="laki-laki" value="laki-laki" required>
                          <label class="form-check-label ml-5" for="laki-laki">Laki-Laki</label><br>
                          <input class="form-check-input ml-2" type="radio" name="jenkel" id="perempuan" value="perempuan" required>
                          <label class="form-check-label ml-5" for="perempuan">Perempuan</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat" class="form-control" required>
                      </div>

                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal" class="form-control" required>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <br>
        <?php
          if(isset($_SESSION['Proses_Tambah'])){
            if($_SESSION['Proses_Tambah'] === "Berhasil"){
              echo "
                <p style='color: green; margin-top: 10px; text-align: center;'>
                    Data Siswa Berhasil Ditambahkan!!!
                </p>
              ";
            }else{
              echo "
                <p style='color: red; margin-top: 10px; text-align: center;'>
                    Data Siswa Gagal Ditambahkan!!!
                </p>
              ";
            }
            unset($_SESSION['Proses_Tambah']);
          }else if(isset($_SESSION['Proses_Edit'])){
            if($_SESSION['Proses_Edit'] === "Berhasil"){
              echo "
                <p style='color: green; margin-top: 10px; text-align: center;'>
                    Data Siswa Berhasil Diubah!!!
                </p>
              ";
            }else{
              echo "
                <p style='color: red; margin-top: 10px; text-align: center;'>
                    Data Siswa Gagal Diubah!!!
                </p>
              ";
            }
            unset($_SESSION['Proses_Edit']);
          }else if(isset($_SESSION['Proses_Hapus'])){
            if($_SESSION['Proses_Hapus'] === "Berhasil"){
              echo "
                <p style='color: green; margin-top: 10px; text-align: center;'>
                    Data Siswa Berhasil Dihapus!!!
                </p>
              ";
            }else{
              echo "
                <p style='color: red; margin-top: 10px; text-align: center;'>
                    Data Siswa Gagal Dihapus!!!
                </p>
              ";
            }
            unset($_SESSION['Proses_Hapus']);
          }
        ?>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col"><center>NO</center></th>
                <th scope="col"><center>NISN</center></th>
                <th scope="col"><center>FOTO</center></th>
                <th scope="col"><center>NAMA</center></th>
                <th scope="col"><center>JENIS KELAMIN</center></th>
                <th scope="col"><center>TEMPAT LAHIR</center></th>
                <th scope="col"><center>TANGGAL LAHIR</center></th>
                <th scope="col"><center>EDIT</center></th>
                <th scope="col"><center>HAPUS</center></th>
              </tr>
            </thead>
            <!-- Memeriksa apakah ada data tersimpan atau tidak -->
            <?php 
              $cek = mysqli_num_rows($select);
              if($cek == "0"){
                echo "
                  <tr>
                    <td colspan='9' style='text-align:center;'>Data Tidak Ditemukan</td>
                  </tr>";
              }
            ?>
            <tbody>
              <?php 
                include '../koneksi.php';
                $no = 1;
                while($data_siswa = mysqli_fetch_array($select)){
              ?>
              <tr>
                <th scope="row"><center><?php echo $no ?></center></th>
                <td><center><?php echo $data_siswa["Nisn"] ?></center></td>
                <td><center><img src="../assets/foto siswa/<?php echo $data_siswa['Foto']; ?>" width="10%"></center></td>
                <td><center><?php echo $data_siswa["Nama"] ?></center></td>
                <td><center><?php echo $data_siswa["Jenis_Kelamin"] ?></center></td>
                <td><center><?php echo $data_siswa["Tempat_Lahir"] ?></center></td>
                <td><center><?php echo $data_siswa["Tanggal_Lahir"] ?></center></td>
                <td><button type="button" data-toggle="modal" data-target="#EditData<?php echo $data_siswa["Nisn"];?>"><i class="fas fa-edit bg-success p-1 text-dark"></i></button></td>
                <!-- Modal Edit Data -->
                <div class="modal fade" id="EditData<?php echo $data_siswa["Nisn"];?>" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">EDIT DATA SISWA</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="proses_edit.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label>NISN</label>
                              <input type="number" value="<?php echo $data_siswa['Nisn'];?>" name="nisn" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                              <label>Foto Siswa</label>
                              <input type="file" name="foto" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label>Nama Lengkap Siswa</label>
                              <input type="text" value="<?php echo $data_siswa['Nama'];?>" name="nama_siswa" class="form-control" required>
                            </div>

                            <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <div class="jenkel">
                                <input class="form-check-input ml-2" type="radio" name="jenkel" id="laki-laki" value="laki-laki" required>
                                <label class="form-check-label ml-5" for="laki-laki">Laki-Laki</label><br>
                                <input class="form-check-input ml-2" type="radio" name="jenkel" id="perempuan" value="perempuan" required>
                                <label class="form-check-label ml-5" for="perempuan">Perempuan</label>
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Tempat Lahir</label>
                              <input type="text" value="<?php echo $data_siswa['Tempat_Lahir'];?>" name="tempat" class="form-control" required>
                            </div>

                            <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input type="date" value="<?php echo $data_siswa['Tanggal_Lahir'];?>" name="tanggal" class="form-control" required>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
                            </div>
                          </form>
                        </div>
                      </div>
                  </div>
                </div>
                <td><button><a href="proses_hapus.php?Nisn=<?php echo $data_siswa["Nisn"]; ?>"><i class="fas fa-trash-alt bg-danger p-1 text-dark"></a></i></button></td>
              </tr>
              <?php
                  $no++;
                }
              ?>
            </tbody>
          </table>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assets/js/admin.js"></script>
  </body>
</html>
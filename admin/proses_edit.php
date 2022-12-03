<?php
  session_start();
  require '../koneksi.php';
  if(isset($_SESSION['Login'])){
    if($_SESSION['Role'] === "admin"){
      if(isset($_POST['edit'])){
        $nisn = htmlspecialchars($_POST["nisn"]);
        $nama = htmlspecialchars($_POST["nama_siswa"]);
        $jenkel = htmlspecialchars($_POST["jenkel"]);
        $tempat_lahir = htmlspecialchars($_POST["tempat"]);
        $tanggal_lahir = htmlspecialchars($_POST["tanggal"]);
        //Mengambil nama File Foto
        $gambar = $_FILES["foto"]["name"]; 
        $jenis_file = array('png','jpg','jpeg');
        $memisahkan_ekstensi = explode('.', $gambar);
        $ekstensi = strtolower(end($memisahkan_ekstensi));
        $nama_gambar_baru = "$nama-$nisn.$ekstensi";
        $tmp = $_FILES['foto']['tmp_name'];
        //Mengecek jenis ekstensi apakah sudah sesuai
        if(in_array($ekstensi, $jenis_file) === true){
          //Memulai Proses penghapusan File Gambar Yang Lama
          $nama_foto = "SELECT Foto FROM siswa WHERE Nisn = '$nisn'";
          $data_foto = mysqli_query($koneksi, $nama_foto);
          //Menyimpan data gambar ke dalam bentuk array yang berisikan 'name', 'type', 'size' dll.
          $foto_lama = mysqli_fetch_array($data_foto);
          //Menghapus file didalam Penyimpanan atau direktori
          unlink("../assets/foto siswa/".$foto_lama['Foto']);

          //Setelah itu Masukkan File Gambar yang Baru
          move_uploaded_file($tmp,'../assets/foto siswa/'.$nama_gambar_baru);
          //Setelah File Terupdate, Database Juga Di Update
          $update = mysqli_query($koneksi, "UPDATE siswa SET Foto = '$nama_gambar_baru', Nama = '$nama', Jenis_Kelamin = '$jenkel', Tempat_Lahir = '$tempat_lahir', Tanggal_Lahir = '$tanggal_lahir' WHERE Nisn = '$nisn'");
          if($update){
            $_SESSION['Proses_Edit'] = "Berhasil";
            header("Location: daftar_siswa.php");
          }else{
            $_SESSION['Proses_Edit'] = "Gagal";
            header("Location: daftar_siswa.php");
          }
        }
      }
    }else{
        header("Location: ../user/dashboard.php");
    }
  }else{
    header("Location: ../login.php");
  }
?>
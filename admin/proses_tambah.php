<?php
    session_start();
    require '../koneksi.php';
    if(isset($_SESSION['Login'])){
      if($_SESSION['Role'] === "admin"){
        if(isset($_POST['tambah'])){
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
            if(move_uploaded_file($tmp,'../assets/foto siswa/'.$nama_gambar_baru)){
              $tambah = mysqli_query($koneksi, "INSERT INTO siswa VALUES($nisn, '$nama_gambar_baru', '$nama', '$jenkel', '$tempat_lahir', '$tanggal_lahir')");
              if ($tambah){
                $_SESSION['Proses_Tambah'] = "Berhasil";
            }else{
                $_SESSION['Proses_Tambah'] = "Gagal";
              }
            }
            //Jika ekstensinya salah
          }else{
            $_SESSION['Proses_Tambah'] = "Format Gambar Salah";
          }
          header("Location: daftar_siswa.php");
        }
      }else{
        header("Location: ../user/dashboard.php");
      }
    }else{
       header("Location: ../login.php");
    }
?>
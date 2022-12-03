<?php
    session_start();
    require '../koneksi.php';
    if(isset($_SESSION['Login'])){
        if($_SESSION['Role'] === "admin"){
            $nisn = $_GET["Nisn"];
            //Mengambil data gambar
            $nama_foto = "SELECT Foto FROM siswa WHERE Nisn = '$nisn'";
            $data_foto = mysqli_query($koneksi, $nama_foto);

            //Menyimpan data gambar ke dalam bentuk array yang berisikan 'name', 'type', 'size' dll.
            $foto_lama = mysqli_fetch_array($data_foto);
            //Menghapus file didalam Penyimpanan atau direktori
            unlink("../assets/foto siswa/".$foto_lama['Foto']);
            //Menghapus data dari database
            $hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE Nisn = '$nisn'");
            if($hapus){
                $_SESSION['Proses_Hapus'] = "Berhasil";
                header("Location: daftar_siswa.php");
            }else{
                $_SESSION['Proses_Hapus'] = "Gagal";
                header("Location: daftar_siswa.php");
            }
        }else{
            header("Location: ../user/dashboard.php");
        }
    }else{
        header("Location: ../login.php");
    }
?>
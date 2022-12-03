<?php
    $koneksi = mysqli_connect("localhost", "root", "","sma4samarinda");
    if(!$koneksi){
        die("Website Gagal Terhubung Ke Database" . mysqli_connect_error());
    }
?>
<?php

    $host = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db_name = "db_pwl";

    $koneksi = new mysqli($host,"root","",$db_name);

    if ($koneksi -> connect_error){
        die("Koneksi Gagal : ".$koneksi -> connect_error);
    }
?>
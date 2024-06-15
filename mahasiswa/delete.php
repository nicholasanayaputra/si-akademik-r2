<?php 
include "koneksi.php";
$npm = $_GET['n'];
$q = "delete from mhs where npm='$npm'";
mysqli_query($koneksi, $q);
echo " Data Terhapus \n";
echo "<br>";
echo "<a href='index.php'>Kembali</a>";
?>
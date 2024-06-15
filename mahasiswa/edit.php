<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addmhs.css"> 
	<title>Document</title>
</head>
<body>
	<?php 
include "koneksi.php";
$npm = $_GET['n'];
$q = "select * from mhs where npm='$npm'";
$ex = mysqli_query($koneksi,$q);
$r = mysqli_fetch_array($ex);
?>

<div class="container">
  <form action="#" method="post">

    <label >NPM</label>
    <input type="text" name="tnpm" placeholder="Input Your NPM" value="<?php echo$r['npm']; ?>">
    <label >Name</label>
    <input type="text" name="tnama" placeholder="Enter Your Name.." value="<?php echo$r['nama']; ?>">
    <label >Address</label>
    <input type="text" name="talamat" placeholder="Input Your Address" value="<?php echo$r['alamat']; ?>">
    <label >No Phone</label>
    <input type="text" name="tnotelp" placeholder="Enter Your Phone" value="<?php echo$r['no_telp']; ?>">
    <div class="btn">
    <input type="submit" value="Change" name="bok">
    <a href="index.php" class="back">Back</a>
    </div>
  </form>
</div>

<?php

 if (isset($_POST['bok'])){
	 $npm = $_POST['tnpm'];
	 $nama = $_POST['tnama'];
	 $alamat = $_POST['talamat'];
	 $no_telp = $_POST['tnotelp'];
	 $q = "update mhs set nama='$nama', alamat='$alamat', no_telp='$no_telp' ";
	 $q .= "where npm='$npm' ";
	 mysqli_query($koneksi, $q);
	 echo "<br>";
	 echo "Data Berhasil Diubah";
}
?>

</body>
</html>
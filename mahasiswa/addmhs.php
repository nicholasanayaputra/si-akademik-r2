<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addmhs.css">
    <title>Document</title>
</head>
<body>
    <?php include "koneksi.php"; ?>

<div class="container">
  <form action="#" method="post">

    <label >NPM</label>
    <input type="text" name="tnpm" placeholder="Input Your NPM">
    <label >Name</label>
    <input type="text" name="tnama" placeholder="Enter Your Name..">
    <label >Address</label>
    <input type="text" name="talamat" placeholder="Input Your Address">
    <label >No Phone</label>
    <input type="text" name="tnotelp" placeholder="Enter Your Phone">
    <div class="btn">
    <input type="submit" value="Save" name="bok">
    <a href="index.php" class="back">Back</a>
    </div>
  </form>
</div>

<?php
    if (isset ($_POST ['bok'])) {
        $npm = $_POST ['tnpm'];
        $nama = $_POST ['tnama'];
        $alamat = $_POST ['talamat'];
        $notelp = $_POST ['tnotelp'];

        $q = "insert into mhs (npm, nama, alamat, no_telp) ";
        $q .= "values ('$npm','$nama','$alamat','$notelp')";
        mysqli_query($koneksi, $q);
        echo "Data Tersimpan";
    }

?>
</body>
</html>
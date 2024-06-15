<?php
 include "koneksi.php";
    $q = "select * from mhs";
    $ex = mysqli_query($koneksi, $q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mahasiswa.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="left-side">
                <h1 class="title">Universitas Indraprasta PGRI</h1>
                <div class="content">
                     <a href="../dashboard/index.php" class="dashboard">
                        <img src="../image/dashboard.png" alt="">
                        <p>Dashboard</p>
                    </a>
                    <div class="dashboard">
                        <img src="../image/bag.png" alt="">
                        <p>Data Mahasiswa</p>
                    </div>
                    <a class="dashboard" href="../jadwal/index.php">
                        <img src="../image/krs.png" alt="">
                        <p>Jadwal & Presensi</p>
                    </a>
                    <a class="dashboard" href="../tugas/index.php">
                        <img src="../image/kuisoner.png" alt="">
                        <p>Bahan & Tugas</p>
                    </a>
                </div>
         </div>

         <div class="right-side">
            <nav>
                <div class="hero">
                    <img src="../image/hero.png" alt="">
                </div>
                <div class="news">
                  <div class="notif">
                      <img src="../image/bell.png" alt="" class="bell">
                    <img src="../image/circled.png" alt="" class="user">
                  </div>
                    <div class="profile">
                        <img src="../image/profile.png" alt="">
                        <div class="profile-name">
                            <p>Admin</p>
                            <p>202143501234</p>
                        </div>
                    </div>
                </div>
            </nav>
         <div>
            <div class="wrapper">
                <h1 class="title-mhs">Data Mahasiswa</h1>
                <div class="mahasiswa">
                <p>Semua Data Mahasiswa</p>
                <a href="addmhs.php" class="add-mhs">Tambah Mahasiswa</a>
            </div>
            <table border="1" class="table" >
                <tr class="header-data">
                    <th width="50">NPM</th>
                    <th width="250">Nama</th>
                    <th width="350">Alamat</th>
                    <th width="150">No. Telepon</th>
                    <th width="60">Action</th>
                </tr>
                <?php  
    while ($r = mysqli_fetch_array($ex)) :
?>
                <tr class="data">
                    <td><?php echo $r['npm']; ?></td>
                    <td><?php echo $r['nama']; ?></td>
                    <td><?php echo $r['alamat']; ?></td>
                    <td><?php echo $r['no_telp']; ?></td>
                    <td class="action">
                       <?php echo "<a href='edit.php?n=$r[npm]'><img class='edit' src='../image/edit.png' alt='edit'></a>" ?>
                       <?php echo "<a href='delete.php?n=$r[npm]'><img class='delete' src='../image/delete.png' alt='edit'></a>" ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </div>
    </table>
            </div>
         </div>
    </div>
</body>
</html>
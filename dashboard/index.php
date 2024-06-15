<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
      <div class="container">
          <!-- Left-Side -->
         <div class="left-side">
                <h1 class="title">Universitas Indraprasta PGRI</h1>
                <div class="content">
                    <div class="dashboard">
                        <img src="../image/dashboard.png" alt="">
                        <p>Dashboard</p>
                    </div>
                    <a href="../mahasiswa/index.php" class="dashboard">
                        <img src="../image/bag.png" alt="">
                        <p>Data Mahasiswa</p>
                    </a>
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

         <!-- Right-Side -->
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

             <div class="wrapper">
                <h1 class="wrapper-title">Dashboard</h1>
                <div class="card">
                    <a class="card-content" href="#">
                        <div class="icon">
                            <img src="../image/checklist.png" alt="">
                            <p>KRS</p>
                        </div>
                        <div class="card-number">
                            <h1>8</h1>
                        </div>
                        <div class="card-footer">
                            <img src="../image/arrow.png" alt="">
                            <p>Dalam 1 Semester</p>
                        </div>
                    </a>
                    <a class="card-content-second" href="../mahasiswa/index.php">
                        <div class="icon">
                            <img src="../image/people.png" alt="">
                            <p>Data Mahasiswa</p>
                        </div>
                        <div class="card-number">
                            <h1 class="card-mhs">40 <span>Mahasiswa</span></h1>
                        </div>
                        <div class="card-footer">
                            <p>R62 dalam 1 semester</p>
                        </div>
                    </a>
                    <a class="card-content-third" href="../jadwal/index.php">
                        <div class="icon">
                            <img src="../image/schedule.png" alt="">
                            <p>Data Presensi</p>
                        </div>
                        <div class="card-number">
                             <h1 class="card-mhs">13 <span>Pertemuan</span></h1>
                        </div>
                        <div class="card-footer">
                            <p>70% Dari 16 Pertemuan</p>
                        </div>
                    </a>
                    <a class="card-content-fourth" href="../tugas/index.php">
                        <div class="icon">
                            <img src="../image/bookmark.png" alt="">
                            <p>Bahan & Tugas</p>
                        </div>
                        <div class="card-number">
                             <h1 class="card-mhs">10 <span>Dosen</span></h1>
                        </div>
                        <div class="card-footer">
                            <p>Dosen Dalam 1 Semester</p>
                        </div>
                    </a>                   
                </div>                
             </div>
          </div>
      </div>


</body>
</html>
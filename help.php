<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Page Title</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include('header.php') ?>
</head>

<body>

  <nav class="navbar navbar-horizontal navbar-expand navbar-dark bg-default py-2">
    <div class="container">
      <h4 class="text-white">Sistem Pakar <i class="fab fa-android"></i></h4>

      <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item mx-3">
          <a class="nav-link nav-link-icon" href="home.php">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon active" href="#">
            Help
          </a>
        </li>
      </ul>
    </div>
    <div class="nav-item">
      <a class="nav-link text-white" href="logout.php">
        <i class="fa fa-sign-out-alt"></i>Logout
      </a>
    </div>
  </nav>



  <div class="jumbotron" style="background-image: url(assets/images/bg2.jpg); background-size: cover; height: 500px">
    <div class="container">
      <h1 class="display-4 mt-5 text-white">Help</h1>
      <p class="lead text-white">Panduan penggunaan website sistem pakar.</p>
    </div>
  </div>


  <div class="container">
    <h4>STEP 1</h4>
    <h6>Pilih method yang akan anda gunakan</h6>
    <img src="images/1.png">
    <p>Tinggal diklik di bagian coba</p>
    <br>
    <h4>STEP 2</h4>
    <h6>Isi tabel yang ada</h6>
    <img src="images/2.png">
    <p>Isi semua tabel sesuai formatnya isi tabel selain dari faktor dan nama hanya berisi angka</p>
    <p>Kemudian klik hitung, jika ragu klik reset mereset semua data, jika ingin kembali ke home tinggal di klik home</p>
    <br>
    <h4>STEP 3</h4>
    <h6>Hasil: </h6>
    <img src="images/3.png">
    <p>Tinggal menunggu hasilnya akan seperti ini</p>


  </div>
  </div>

  <?php include('footer.php') ?>

</body>

</html>
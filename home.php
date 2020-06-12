<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>SisKar</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include('header.php') ?>
</head>

<body class="bg-secondary">

  <nav class="navbar navbar-horizontal navbar-expand navbar-dark bg-default py-2">
    <div class="container">
      <h4 class="text-white">Sistem Pakar <i class="fab fa-android"></i></h4>

      <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item mx-3">
          <a class="nav-link nav-link-icon active" href="#">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="help.php">
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

      <h1 class="display-4 text-white">Selamat datang di website sistem pakar <strong><?php echo $_SESSION['username']; ?> </strong>!</h1>
      <p class="lead text-white">Website yang menyediakan info seputar pakar yang Anda butuhkan.</p>
      <hr class="my-4">
      <p class="text-white mb-5">Mulai sekarang!</p>
      <a class="btn btn-primary btn-lg" href="help.php" role="button">Pelajari Selengkapnya</a>
    </div>
  </div>
  <div class="container">


    <h3 class="text-center">BlackIT</h3>
    <p class="text-center">ITconsultant</p>

    <h4>Menu : </h4>
    <div class="row">
      <div class="col-md-4">
        <div class="card shadow mt-5" style="width: 18rem;">
          <div class="card-header bg-info">
            <h3 class="card-title text-center my-4">AHP</h3>
          </div>
          <div class="card-body text-center">
            <p class="card-text">Sistem pakar dengan metode AHP</p>
            <a class="btn btn-success btn-block" href="https://drive.google.com/file/d/11ov3gr12bNJ7RmFLWSlxx8QmjU0vN107/view?usp=sharing" download><i class="fas fa-download"></i> <small>Download excel file</small></a>
            <a class="btn btn-primary btn-block" href="ahp.php" class="w3-btn w3-block w3-black"><i class="fas fa-pencil-ruler"></i> Coba</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow mt-5" style="width: 18rem;">
          <div class="card-header bg-warning">
            <h3 class="card-title text-center my-4  text-white">SAW</h3>
          </div>
          <div class="card-body text-center">
            <p class="card-text">Sistem pakar dengan metode SAW</p>
            <a class="btn btn-success btn-block" href="https://drive.google.com/file/d/1Ch-dxUhU_n0gRM7_-BeImBZwUIliZ4di/view?usp=sharing" download><i class="fas fa-download"></i> <small>Download excel file</small></a>
            <a class="btn btn-primary btn-block" href="saw.php" class="w3-btn w3-block w3-black"><i class="fas fa-pencil-ruler"></i> Coba</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow mt-5" style="width: 18rem;">
          <div class="card-header bg-primary">
            <h3 class="card-title text-center my-4  text-white">MEFP</h3>
          </div>
          <div class="card-body text-center">
            <p class="card-text">Sistem pakar dengan metode MEFP</p>
            <a class="btn btn-success btn-block" href="https://drive.google.com/file/d/1XwKmZc5A0daYfT9h_l4LT2Zynfl8tauk/view?usp=sharing" download><i class="fas fa-download"></i> <small>Download excel file</small></a>
            <a class="btn btn-primary btn-block" href="mfep.php" class="w3-btn w3-block w3-black"><i class="fas fa-pencil-ruler"></i> Coba</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow mt-5" style="width: 18rem;">
          <div class="card-header bg-danger">
            <h3 class="card-title text-center my-4 text-white">SMART</h3>
          </div>
          <div class="card-body text-center">
            <p class="card-text">Sistem pakar dengan metode SMART</p>
            <a class="btn btn-success btn-block" href="https://drive.google.com/file/d/1xTApN-NwfdPPkpbLL-53-w13IR-nJWqz/view?usp=sharing" download><i class="fas fa-download"></i> <small>Download excel file</small></a>
            <a class="btn btn-primary btn-block" href="smart.php" class="w3-btn w3-block w3-black"><i class="fas fa-pencil-ruler"></i> Coba</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow mt-5" style="width: 18rem;">
          <div class="card-header bg-secondary">
            <h3 class="card-title text-center my-4">TOPSIS</h3>
          </div>
          <div class="card-body text-center">
            <p class="card-text">Sistem pakar dengan metode TOPSIS</p>
            <a class="btn btn-success btn-block" href="https://drive.google.com/file/d/1dS1nr0FYdb9sj4VjZoB44A6urTMlsgJI/view?usp=sharing" download><i class="fas fa-download"></i> <small>Download excel file</small></a>
            <a class="btn btn-primary btn-block" href="topsis.php" class="w3-btn w3-block w3-black"><i class="fas fa-pencil-ruler"></i> Coba</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow mt-5" style="width: 18rem;">
          <div class="card-header bg-default">
            <h3 class="card-title text-center my-4 text-white">WP</h3>
          </div>
          <div class="card-body text-center">
            <p class="card-text">Sistem pakar dengan metode WP</p>
            <a class="btn btn-success btn-block" href="https://drive.google.com/file/d/1fMFitBRGTZcra10B5O-50rhQZIB0bcU9/view?usp=sharing" download><i class="fas fa-download"></i> <small>Download excel file</small></a>
            <a class="btn btn-primary btn-block" href="wp.php" class="w3-btn w3-block w3-black"><i class="fas fa-pencil-ruler"></i> Coba</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php include('footer.php') ?>
</body>

</html>
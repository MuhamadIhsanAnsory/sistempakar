<!DOCTYPE html>
<html>

<head>
  <title>SisKar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include('header.php') ?>
</head>

<body>
  <nav class="navbar navbar-horizontal navbar-expand navbar-dark  bg-default py-2">
    <div class="container">
      <h4 class="text-white">Sistem Pakar <i class="fab fa-android"></i></h4>

      <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item mx-3">
          <a class="nav-link nav-link-icon" href="home.php">
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
  <h3 class="text-center my-4">Perhitungan Penentuan Alternatif Produk Terbaik dengan Metode MFEP (Multifactor Evaluation Process)</h3>
  <p class="ml-5"><i>**Wajib diisi semua</i></p>
  <div class="justify-content-center row">

    <form method="POST">
      <table class="table table-responsive table-bordered table-hover table-sm table-striped">
        <tr>
          <th rowspan="3" bgcolor="yellow">Alternatif</th>
          <th colspan="3" class="bg-success">Faktor Penilaian</th>
        </tr>
        <tr class="bg-success">
          <th>0.5</th>
          <th>0.3</th>
          <th>0.2</th>
          <th colspan="1" class="bg-primary">1</th>
        </tr>
        <tr>
          <th>
            <input type="hidden" name="faktor1" value="Hardware">
            <label>Hardware</label>
          </th>
          <th>
            <input type="hidden" name="faktor2" value="Software">
            <label>Software</label>
          </th>
          <th>
            <input type="hidden" name="faktor3" value="Dukungan vendor">
            <label>Dukungan Vendor</label>
          </th>
        </tr>
        <tr>
          <td><input required class="form-control" type="text" name="nama1" value="Apple"></td>
          <td><input required class="form-control" type="text" name="nilai1"></td>
          <td><input required class="form-control" type="text" name="nilai2"></td>
          <td><input required class="form-control" type="text" name="nilai3"></td>
        </tr>
        <tr>
          <td><input required class="form-control" type="text" name="nama2" value="Asus"></td>
          <td><input required class="form-control" type="text" name="nilai4"></td>
          <td><input required class="form-control" type="text" name="nilai5"></td>
          <td><input required class="form-control" type="text" name="nilai6"></td>
        </tr>
        <tr>
          <td><input required class="form-control" type="text" name="nama3" value="Hp"></td>
          <td><input required class="form-control" type="text" name="nilai7"></td>
          <td><input required class="form-control" type="text" name="nilai8"></td>
          <td><input required class="form-control" type="text" name="nilai9"></td>
        </tr>
        <tr>
          <td><input required class="form-control" type="text" name="nama4" value="Lenovo"></td>
          <td><input required class="form-control" type="text" name="nilai10"></td>
          <td><input required class="form-control" type="text" name="nilai11"></td>
          <td><input required class="form-control" type="text" name="nilai12"></td>
        </tr>
      </table>
      <div class="row justify-content-center">
        <input type="submit" class="btn btn-primary" name="hitung" value="Hitung">
        <input type="reset" class="btn btn-warning" name="reset" value="Reset">
      </div>
      <div class="row justify-content-center my-3">
        <a href="home.php" class="btn btn-success">home</a>
      </div>
    </form>
  </div>
  <hr>
  <h3 align=center>Hasil :</h3>
  <?php
  if (isset($_POST['hitung'])) {
    $faktor1    = $_POST['faktor1'];
    $faktor2    = $_POST['faktor2'];
    $faktor3    = $_POST['faktor3'];
    $nama1    = $_POST['nama1'];
    $nama2    = $_POST['nama2'];
    $nama3    = $_POST['nama3'];
    $nama4    = $_POST['nama4'];
    $nilai1    = $_POST['nilai1'];
    $nilai2    = $_POST['nilai2'];
    $nilai3    = $_POST['nilai3'];
    $nilai4    = $_POST['nilai4'];
    $nilai5    = $_POST['nilai5'];
    $nilai6    = $_POST['nilai6'];
    $nilai7    = $_POST['nilai7'];
    $nilai8    = $_POST['nilai8'];
    $nilai9    = $_POST['nilai9'];
    $nilai10    = $_POST['nilai10'];
    $nilai11    = $_POST['nilai11'];
    $nilai12    = $_POST['nilai12'];

    $a = 0.5;
    $b = 0.3;
    $c = 0.2;
    $col1    = $nilai1 * $a;
    $col2    = $nilai2 * $b;
    $col3    = $nilai3 * $c;
    $col1b    = $nilai4 * $a;
    $col2b    = $nilai5 * $b;
    $col3b    = $nilai6 * $c;
    $col1c    = $nilai7 * $a;
    $col2c    = $nilai8 * $b;
    $col3c    = $nilai9 * $c;
    $col1d    = $nilai10 * $a;
    $col2d    = $nilai11 * $b;
    $col3d    = $nilai12 * $c;
    $sum     = $col1 + $col2 + $col3;
    $sum1     = $col1b + $col2b + $col3b;
    $sum2     = $col1c + $col2c + $col3c;
    $sum3     = $col1d + $col2d + $col3d;
    $all = array($sum, $sum1, $sum2, $sum3);
    $short = array($nama1 => $sum, $nama2 => $sum1, $nama3 => $sum2, $nama4 => $sum3);
    arsort($short);

    echo "
                <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td>Alternatif : </td>
                </tr>
                </table>
            <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>       
                        <tr>
                        <td>$nama1</td>
                        <td>$nama2</td>
                        <td>$nama3</td>
                        <td>$nama4</td>
                    </tr>
                    </tr>
                </table>

                <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td> </td>
                </tr>
                </table>
        <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td>Kriteria : </td>
                </tr>
                </table>
            <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>       
                        <tr>
                        <td>$faktor1</td>
                        <td>$faktor2</td>
                        <td>$faktor3</td>
                    </tr>
                    </tr>
                </table>

                <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td> </td>
                </tr>
                </table>
              <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td>Bobot Faktor : </td>
                </tr>
                </table>
            <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>       
                        <tr>
                        <td align='right'>";
    echo number_format($a, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($b, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($c, 2, ',', '.');
    echo "</td>
                    </tr>
                    </tr>
                </table>

                <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td> </td>
                </tr>
                </table>
                <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td>Nilai Bobot : </td>
                </tr>
                </table>
            <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>       
                        <tr>    
                    
                    <td align='right'>";
    echo number_format($nilai1, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai4, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai7, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai10, 0, ',', '.');
    echo "</td>
                </tr>
                <tr>    
                    
                    <td align='right'>";
    echo number_format($nilai2, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai5, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai8, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai11, 0, ',', '.');
    echo "</td>
                </tr>
                <tr>    
                    
                    <td align='right'>";
    echo number_format($nilai3, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai5, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai8, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai12, 0, ',', '.');
    echo "</td>
                </tr>
                    </tr>
                </table>
                <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td> </td>
                </tr>
                </table>
                <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td>Perkalian : </td>
                </tr>
                </table>

                <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td> </td>
                </tr>
                </table>
                <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>    
                    
                    <td align='right'>";
    echo number_format($col1, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col2, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col3, 0, ',', '.');
    echo "</td>
                    
                </tr>
                <tr>    
                    
                    <td align='right'>";
    echo number_format($col1b, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col2b, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col3b, 0, ',', '.');
    echo "</td>
                   
                </tr>
                <tr>    
                    
                    <td align='right'>";
    echo number_format($col1c, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col2c, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col3c, 0, ',', '.');
    echo "</td>
                    
                </tr>
                <tr>    
                    
                    <td align='right'>";
    echo number_format($col1d, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col2d, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col3d, 0, ',', '.');
    echo "</td>
                    
                </tr>
                <table cellpadding=3 cellspacing=3
                align=center>
            <tr>
                </table>

                <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td> </td>
                </tr>
                </table>
                <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td>Hasil : </td>
                </tr>
                </table>
            <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>       
                        <tr>
                        <td align='right'>";
    echo number_format($sum, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($sum1, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($sum2, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($sum3, 2, ',', '.');
    echo "</td>
                    </tr>
                    </tr>
                </table>

                 <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td> </td>
                </tr>
                </table>
               
            <table border='1' cellpadding='4' cellspacing=4
            align=center>
                <tr>
                	<th>nama</th>
                    <td>$faktor1</td>
                    <td>$faktor2</td>
                    <td>$faktor3</td>
                    <td>hasil</td>
                </tr>
                <tr>    
                    <td>$nama1</td>
                   	<td align='right'>";
    echo number_format($col1, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col2, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col3, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($sum, 0, ',', '.');
    echo "</td>
                </tr>
                <tr>    
                    <td>$nama2</td>
                   	<td align='right'>";
    echo number_format($col1b, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col2b, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col3b, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($sum1, 0, ',', '.');
    echo "</td>
                </tr>
                <tr>    
                    <td>$nama3</td>
                   	<td align='right'>";
    echo number_format($col1c, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col2c, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col3c, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($sum2, 0, ',', '.');
    echo "</td>
                </tr>
                <tr>    
                    <td>$nama4</td>
                   	<td align='right'>";
    echo number_format($col1d, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col2d, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($col3d, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($sum3, 0, ',', '.');
    echo "</td>
                </tr>
                <table cellpadding=3 cellspacing=3
          		  align=center>
    	 			
   				 </table>           
            </table>
            <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
            <td align='center'>hasil tertinggi adalah ";
    echo max($all);
    "</td>
              </tr>
                </table>
                </table>           
        ";
    echo "<br>";
    echo "<tr>";
    echo "<td align='center'>hasil ranking :</td>";
    echo "<br>";


    foreach ($short as $x => $x_value) {
      echo "<table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
          <td align='center'>";
      echo "  " . $x . "  " . $x_value;
      echo "</td>
          </tr>
                </table>";
    }
  }

  ?>


</body>
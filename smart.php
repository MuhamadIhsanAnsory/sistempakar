<!DOCTYPE html>
<html>

<head>
  <title>SisKar</title>
  <meta charset="UTF-8">
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
  <h3 class="text-center my-4">Perhitungan Penentuan Alternatif Produk Terbaik dengan Metode SMART</h3>
  <p class="ml-5"><i>**Wajib diisi semua</i></p>
  <div class="row justify-content-center">
    <form method="POST">
      <table class="table table-responsive table-bordered table-hover table-sm table-striped">
        <tr>
          <th rowspan="2" bgcolor="yellow">Altrnatif</th>
          <th colspan="5" class="bg-success">faktor penilaian</th>
        </tr>

        <tr class="bg-success">

          <th><input type="hidden" name="faktor1" value="Kualitas"><label>Kualitas</label></th>
          <th><input type="hidden" name="faktor2" value="Fitur"><label>Fitur</label></th>
          <th><input type="hidden" name="faktor3" value="Populer"><label>Populer</label></th>
          <th><input type="hidden" name="faktor4" value="Purna Jual"><label>Purna Jual</label></th>
          <th><input type="hidden" name="faktor5" value="Keawetan"><label>Keawetan</label></th>
        </tr>
        <tr>
          <td><input required class="form-control" type="text" name="nama1" value="Apple"></td>
          <td><input required class="form-control" type="text" name="nilai1"></td>
          <td><input required class="form-control" type="text" name="nilai2"></td>
          <td><input required class="form-control" type="text" name="nilai3"></td>
          <td><input required class="form-control" type="text" name="nilai13"></td>
          <td><input required class="form-control" type="text" name="nilai14"></td>

        </tr>
        <tr>
          <td><input required class="form-control" type="text" name="nama2" value="Asus"></td>
          <td><input required class="form-control" type="text" name="nilai4"></td>
          <td><input required class="form-control" type="text" name="nilai5"></td>
          <td><input required class="form-control" type="text" name="nilai6"></td>
          <td><input required class="form-control" type="text" name="nilai15"></td>
          <td><input required class="form-control" type="text" name="nilai16"></td>


        </tr>
        <tr>
          <td><input required class="form-control" type="text" name="nama3" value="Hp"></td>
          <td><input required class="form-control" type="text" name="nilai7"></td>
          <td><input required class="form-control" type="text" name="nilai8"></td>
          <td><input required class="form-control" type="text" name="nilai9"></td>
          <td><input required class="form-control" type="text" name="nilai17"></td>
          <td><input required class="form-control" type="text" name="nilai18"></td>

        </tr>
        <tr>
          <td><input required class="form-control" type="text" name="nama4" value="Lenovo"></td>
          <td><input required class="form-control" type="text" name="nilai10"></td>
          <td><input required class="form-control" type="text" name="nilai11"></td>
          <td><input required class="form-control" type="text" name="nilai12"></td>
          <td><input required class="form-control" type="text" name="nilai19"></td>
          <td><input required class="form-control" type="text" name="nilai20"></td>


        </tr>

      </table>
      <table class="table table-responsive table-bordered table-hover table-sm table-striped">
        <tr>
        <tr>
          <th class="bg-primary">Bobot</th>
          <th><input required class="form-control" type="text" name="bobot1" value="100"></th>
          <th><input required class="form-control" type="text" name="bobot2" value="80"></th>
          <th><input required class="form-control" type="text" name="bobot3" value="90"></th>
          <th><input required class="form-control" type="text" name="bobot4" value="50"></th>
          <th><input required class="form-control" type="text" name="bobot5" value="70"></th>
        </tr>
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
  <hr />
  <h3 align=center>Hasil :</h3>
  <?php
  if (isset($_POST['hitung'])) {
    $faktor1    = $_POST['faktor1'];
    $faktor2    = $_POST['faktor2'];
    $faktor3    = $_POST['faktor3'];
    $faktor4    = $_POST['faktor4'];
    $faktor5    = $_POST['faktor5'];

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
    $nilai13    = $_POST['nilai13'];
    $nilai14    = $_POST['nilai14'];
    $nilai15    = $_POST['nilai15'];
    $nilai16    = $_POST['nilai16'];
    $nilai17    = $_POST['nilai17'];
    $nilai18    = $_POST['nilai18'];
    $nilai19    = $_POST['nilai19'];
    $nilai20    = $_POST['nilai20'];
    $bobot1    = $_POST['bobot1'];
    $bobot2    = $_POST['bobot2'];
    $bobot3    = $_POST['bobot3'];
    $bobot4    = $_POST['bobot4'];
    $bobot5    = $_POST['bobot5'];

    $sum      = ($nilai1 * $bobot1) + ($nilai2 * $bobot2) + ($nilai3 * $bobot3) + ($nilai13 * $bobot4) + ($nilai14 * $bobot5);
    $sum1     = ($nilai4 * $bobot1) + ($nilai5 * $bobot2) + ($nilai6 * $bobot3) + ($nilai15 * $bobot4) + ($nilai16 * $bobot5);
    $sum2     = ($nilai7 * $bobot1) + ($nilai8 * $bobot2) + ($nilai9 * $bobot3) + ($nilai17 * $bobot4) + ($nilai18 * $bobot5);
    $sum3     = ($nilai10 * $bobot1) + ($nilai11 * $bobot2) + ($nilai12 * $bobot3) + ($nilai19 * $bobot4) + ($nilai20 * $bobot5);
    $sumbobot      = $bobot1 + $bobot2 + $bobot3 + $bobot4;
    $nm1   = $bobot1 / $sumbobot;
    $nm2   = $bobot2 / $sumbobot;
    $nm3   = $bobot3 / $sumbobot;
    $nm4   = $bobot4 / $sumbobot;
    $nm5   = $bobot5 / $sumbobot;
    $sumnm = $nm1 + $nm2 + $nm3 + $nm4 + $nm5;
    $all = array($sum, $sum1, $sum2, $sum3);
    $short = array($nama1 => $sum, $nama2 => $sum1, $nama3 => $sum2, $nama4 => $sum3);
    arsort($short);

    echo "  
        <h3 align=center>Alternatif :</h3>
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

               
                 <h3 align=center>Kriteria :</h3>
            <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                       
                     <tr>       
                        <tr>
                        <td>$faktor1</td>
                        <td>$faktor2</td>
                        <td>$faktor3</td>
                        <td>$faktor4</td>
                        <td>$faktor5</td>
                        
                    </tr>
                    </tr>
               
                </table>
                <h3 align=center>Bobot :</h3>
            <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                       
                     <tr>       
                        <tr>
                        <td>$bobot1</td>
                        <td>$bobot2</td>
                        <td>$bobot3</td>
                        <td>$bobot4</td>
                        <td>$bobot5</td>
                        
                        
                    </tr>
                    </tr>
               
                </table>
                <table border='1' cellpadding='3' cellspacing=3 align=center>
                     <tr>
                        <tr>
                        <th bgcolor='blue'>total bobot</th>
                        <th>$sumbobot</th>
                    </tr>
                    </tr>
                </table>
                 
                  <table  cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>normalisasi bobot</th>
                        <td align='right'>";
    echo number_format($nm1, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nm2, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nm3, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nm4, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nm5, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($sumnm, 0, ',', '.');
    echo "</td>
                    </tr>
                    </tr>
                </table>
            <table border='1' cellpadding='4' cellspacing=4
            align=center>
                <tr>
                	<th>Altrnatif</th>
                    <td>$faktor1</td>
                    <td>$faktor2</td>
                    <td>$faktor3</td>
                    <td>$faktor4</td>
                    <td>$faktor5</td>
                    <td>hasil</td>
                </tr>
                <tr>    
                    <td>$nama1</td>
                   	<td align='right'>";
    echo number_format($nilai1, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai2, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai3, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai13, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai14, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($sum, 0, ',', '.');
    echo "</td>
                </tr>
                <tr>    
                    <td>$nama2</td>
                   	<td align='right'>";
    echo number_format($nilai4, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai5, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai6, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai15, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai16, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($sum1, 0, ',', '.');
    echo "</td>
                </tr>
                <tr>    
                    <td>$nama3</td>
                   	<td align='right'>";
    echo number_format($nilai7, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai8, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai9, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai17, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai18, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($sum2, 0, ',', '.');
    echo "</td>
                </tr>
                <tr>    
                    <td>$nama4</td>
                   	<td align='right'>";
    echo number_format($nilai10, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai11, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai12, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai19, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($nilai20, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($sum3, 0, ',', '.');
    echo "</td>
                </tr>
                <table cellpadding=3 cellspacing=3
          		  align=center>
    	 			<tr>
    	 			<td>hasil tertinggi adalah ";
    echo max($all);
    "</td>
            		</tr>
   				 </table>
               
            </table>
        ";
    echo "<br>";
    echo "<tr>";
    echo "<h3 align=center> Hasil ranking :</h3>";
    echo "<br>";


    foreach ($short as $x => $x_value) {
      echo "<table  cellpadding=3 cellspacing=3
                        align=center>
                 
          <td align='center'>";
      echo "  " . $x . "  " . $x_value;
      echo "</td>
          
                </table>";
    }
  }
  ?>


</body>
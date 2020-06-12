<!DOCTYPE html>
<html>

<head>
  <title>SisKar</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <h3 class="text-center my-4">Perhitungan Penentuan Alternatif Produk Terbaik dengan Metode WP</h3>
  <div class="row justify-content-center">
    <form method="POST">
      <table class="table table-responsive table-bordered table-hover table-sm table-striped">
        <tr>
          <th rowspan="2" bgcolor="yellow">Altrnatif</th>
          <th colspan="6" bgcolor="#00ff80">Faktor Penilaian</th>
        </tr>

        <tr>
          <th><input type="hidden" name="faktor1" value="Harga"><label>Harga</label></th>
          <th><input type="hidden" name="faktor2" value="Kualitas"><label>Kualitas</label></th>
          <th><input type="hidden" name="faktor3" value="Fitur"><label>Fitur</label></th>
          <th><input type="hidden" name="faktor4" value="Populer"><label>Populer</label></th>
          <th><input type="hidden" name="faktor5" value="Purna Jual"><label>Purna Jual</label></th>
          <th><input type="hidden" name="faktor6" value="Keawetan"><label>Keawetan</label></th>
        </tr>
        <tr>
          <td><input class="form-control" required type="text" name="nama1" value="Apple"></td>
          <td><input class="form-control" required type="text" name="nilai1"></td>
          <td><input class="form-control" required type="text" name="nilai2"></td>
          <td><input class="form-control" required type="text" name="nilai3"></td>
          <td><input class="form-control" required type="text" name="nilai13"></td>
          <td><input class="form-control" required type="text" name="nilai14"></td>
          <td><input class="form-control" required type="text" name="nilai21"></td>
        </tr>
        <tr>
          <td><input class="form-control" required type="text" name="nama2" value="Asus"></td>
          <td><input class="form-control" required type="text" name="nilai4"></td>
          <td><input class="form-control" required type="text" name="nilai5"></td>
          <td><input class="form-control" required type="text" name="nilai6"></td>
          <td><input class="form-control" required type="text" name="nilai15"></td>
          <td><input class="form-control" required type="text" name="nilai16"></td>
          <td><input class="form-control" required type="text" name="nilai22"></td>

        </tr>
        <tr>
          <td><input class="form-control" required type="text" name="nama3" value="Hp"></td>
          <td><input class="form-control" required type="text" name="nilai7"></td>
          <td><input class="form-control" required type="text" name="nilai8"></td>
          <td><input class="form-control" required type="text" name="nilai9"></td>
          <td><input class="form-control" required type="text" name="nilai17"></td>
          <td><input class="form-control" required type="text" name="nilai18"></td>
          <td><input class="form-control" required type="text" name="nilai23"></td>
        </tr>
        <tr>
          <td><input class="form-control" required type="text" name="nama4" value="Lenovo"></td>
          <td><input class="form-control" required type="text" name="nilai10"></td>
          <td><input class="form-control" required type="text" name="nilai11"></td>
          <td><input class="form-control" required type="text" name="nilai12"></td>
          <td><input class="form-control" required type="text" name="nilai19"></td>
          <td><input class="form-control" required type="text" name="nilai20"></td>
          <td><input class="form-control" required type="text" name="nilai24"></td>

        </tr>
      </table>
      <table class="table table-responsive table-bordered table-hover table-sm table-striped">
        <tr>
        <tr>
          <td bgcolor="yellow">Variable cost & benefit</td>
          <th><input class="form-control" required type="text" name="cost1" value="cost"></th>
          <th><input class="form-control" required type="text" name="cost2" value="benefit"></th>
          <th><input class="form-control" required type="text" name="cost3" value="benefit"></th>
          <th><input class="form-control" required type="text" name="cost4" value="benefit"></th>
          <th><input class="form-control" required type="text" name="cost5" value="benefit"></th>
          <th><input class="form-control" required type="text" name="cost6" value="benefit"></th>
        </tr>
        </tr>
      </table>

      </table>
      <table class="table table-responsive table-bordered table-hover table-sm table-striped">
        <tr>
        <tr>
          <th bgcolor="blue">Kepentingan</th>
          <th><input class="form-control" required type="text" name="bobot1"></th>
          <th><input class="form-control" required type="text" name="bobot2"></th>
          <th><input class="form-control" required type="text" name="bobot3"></th>
          <th><input class="form-control" required type="text" name="bobot4"></th>
          <th><input class="form-control" required type="text" name="bobot5"></th>
          <th><input class="form-control" required type="text" name="bobot6"></th>
        </tr>
        </tr>
      </table>
      <div class="row justify-content-center">
        <input type="submit" class="btn btn-primary" name="hitung" value="Hitung">
        <input type="reset" class="btn btn-warning" name="reset" value="Reset">
      </div>
      <div class="row justify-content-center">
        <a href="home.php" class="btn btn-success my-3">home</a>
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
    $faktor6    = $_POST['faktor6'];
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
    $nilai21    = $_POST['nilai21'];
    $nilai22    = $_POST['nilai22'];
    $nilai23    = $_POST['nilai23'];
    $nilai24    = $_POST['nilai24'];
    $bobot1    = $_POST['bobot1'];
    $bobot2    = $_POST['bobot2'];
    $bobot3    = $_POST['bobot3'];
    $bobot4    = $_POST['bobot4'];
    $bobot5    = $_POST['bobot5'];
    $bobot6    = $_POST['bobot6'];
    $cost1    = $_POST['cost1'];
    $cost2    = $_POST['cost2'];
    $cost3    = $_POST['cost3'];
    $cost4    = $_POST['cost4'];
    $cost5    = $_POST['cost5'];
    $cost6    = $_POST['cost6'];


    $sumbobot      = $bobot1 + $bobot2 + $bobot3 + $bobot4;
    $nm1   = $bobot1 / $sumbobot;
    $nm2   = $bobot2 / $sumbobot;
    $nm3   = $bobot3 / $sumbobot;
    $nm4   = $bobot4 / $sumbobot;
    $nm5   = $bobot5 / $sumbobot;
    $sumnm = $nm1 + $nm2 + $nm3 + $nm4 + $nm5;

    if ($cost1 == "benefit") {
      $p1 = $bobot1;
    } else {
      $p1 = -1 * $bobot1;
    }
    if ($cost2 == "benefit") {
      $p2 = $bobot2;
    } else {
      $p2 = -1 * $bobot2;
    }
    if ($cost3 == "benefit") {
      $p3 = $bobot3;
    } else {
      $p3 = -1 * $bobot3;
    }
    if ($cost4 == "benefit") {
      $p4 = $bobot4;
    } else {
      $p4 = -1 * $bobot4;
    }
    if ($cost5 == "benefit") {
      $p5 = $bobot5;
    } else {
      $p5 = -1 * $bobot5;
    }
    if ($cost6 == "benefit") {
      $p6 = $bobot6;
    } else {
      $p6 = -1 * $bobot6;
    }
    $s1 = (pow($nilai1, $p1)) * (pow($nilai2, $p2)) * (pow($nilai3, $p3)) * (pow($nilai13, $p4)) * (pow($nilai14, $p5)) * (pow($nilai21, $p6));
    $s2 = (pow($nilai4, $p1)) * (pow($nilai5, $p2)) * (pow($nilai6, $p3)) * (pow($nilai15, $p4)) * (pow($nilai16, $p5)) * (pow($nilai22, $p6));
    $s3 = (pow($nilai7, $p1)) * (pow($nilai8, $p2)) * (pow($nilai9, $p3)) * (pow($nilai17, $p4)) * (pow($nilai18, $p5)) * (pow($nilai23, $p6));
    $s4 = (pow($nilai10, $p1)) * (pow($nilai11, $p2)) * (pow($nilai12, $p3)) * (pow($nilai19, $p4)) * (pow($nilai20, $p5)) * (pow($nilai24, $p6));

    $sum      = $s1 / ($s1 + $s2 + $s3 + $s4);
    $sum1     = $s2 / ($s1 + $s2 + $s3 + $s4);
    $sum2     = $s3 / ($s1 + $s2 + $s3 + $s4);
    $sum3     = $s4 / ($s1 + $s2 + $s3 + $s4);
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
                        <td>$faktor6</td>
                    </tr>
                    </tr>
               
                </table>
                <h3 align=center>Kepentingan:</h3>
            <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                       
                     <tr>       
                        <tr>
                        <td>$bobot1</td>
                        <td>$bobot2</td>
                        <td>$bobot3</td>
                        <td>$bobot4</td>
                        <td>$bobot5</td>
                        <td>$bobot6</td>
                        
                    </tr>
                    </tr>
               
                </table>
                <table border='1' cellpadding='3' cellspacing=3 align=center>
                     <tr>
                        <tr>
                        <th bgcolor='blue'>total kepentingan</th>
                        <th>$sumbobot</th>
                    </tr>
                    </tr>
                </table>
                 
                  <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>bobot kepentingan</th>
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
                    <td>$faktor6</td>
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
    echo number_format($nilai21, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($sum, 5, ',', '.');
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
    echo number_format($nilai22, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($sum1, 5, ',', '.');
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
    echo number_format($nilai23, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($sum2, 5, ',', '.');
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
    echo number_format($nilai24, 0, ',', '.');
    echo "</td>
                    <td align='right'>";
    echo number_format($sum3, 5, ',', '.');
    echo "</td>
                </tr>
                
                 <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>pangkat</th>
                        <td align='right'>";
    echo number_format($p1, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($p2, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($p3, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($p4, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($p5, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($p6, 2, ',', '.');
    echo "</td>
                    </tr>
                    </tr>
                </table>
                <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>Spangkat</th>
                        <td align='right'>";
    echo number_format($s1, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($s2, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($s3, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($s4, 5, ',', '.');
    echo "</td>
                       
                    </tr>
                    </tr>
                </table>
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

  <?php include('footer.php') ?>
</body>
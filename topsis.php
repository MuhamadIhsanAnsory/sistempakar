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
  <h3 class="text-center my-4">Perhitungan Penentuan Alternatif Produk Terbaik dengan Metode TOPSIS</h3>
  <p class="ml-4"><i>**Wajib diisi semua.</i></p>
  <div class="row justify-content-center">
    <form method="POST">
      <table class="table table-responsive table-bordered table-hover table-sm table-striped">
        <tr>
          <th rowspan="2" bgcolor="yellow">Alternatif</th>
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
          <td><input required class="form-control" type="text" name="nama1" value="Apple"></td>
          <td><input required class="form-control" type="text" name="nilai1"></td>
          <td><input required class="form-control" type="text" name="nilai2"></td>
          <td><input required class="form-control" type="text" name="nilai3"></td>
          <td><input required class="form-control" type="text" name="nilai13"></td>
          <td><input required class="form-control" type="text" name="nilai14"></td>
          <td><input required class="form-control" type="text" name="nilai21"></td>
        </tr>
        <tr>
          <td><input required class="form-control" type="text" name="nama2" value="Asus"></td>
          <td><input required class="form-control" type="text" name="nilai4"></td>
          <td><input required class="form-control" type="text" name="nilai5"></td>
          <td><input required class="form-control" type="text" name="nilai6"></td>
          <td><input required class="form-control" type="text" name="nilai15"></td>
          <td><input required class="form-control" type="text" name="nilai16"></td>
          <td><input required class="form-control" type="text" name="nilai22"></td>

        </tr>
        <tr>
          <td><input required class="form-control" type="text" name="nama3" value="Hp"></td>
          <td><input required class="form-control" type="text" name="nilai7"></td>
          <td><input required class="form-control" type="text" name="nilai8"></td>
          <td><input required class="form-control" type="text" name="nilai9"></td>
          <td><input required class="form-control" type="text" name="nilai17"></td>
          <td><input required class="form-control" type="text" name="nilai18"></td>
          <td><input required class="form-control" type="text" name="nilai23"></td>
        </tr>
        <tr>
          <td><input required class="form-control" type="text" name="nama4" value="Lenovo"></td>
          <td><input required class="form-control" type="text" name="nilai10"></td>
          <td><input required class="form-control" type="text" name="nilai11"></td>
          <td><input required class="form-control" type="text" name="nilai12"></td>
          <td><input required class="form-control" type="text" name="nilai19"></td>
          <td><input required class="form-control" type="text" name="nilai20"></td>
          <td><input required class="form-control" type="text" name="nilai24"></td>

        </tr>
      </table>
      <table class="table table-responsive table-bordered table-hover table-sm table-striped">
        <tr>
        <tr>
          <td bgcolor="yellow">Variable cost & benefit</td>
          <th><input required class="form-control" type="text" name="cost1" value="cost"></th>
          <th><input required class="form-control" type="text" name="cost2" value="benefit"></th>
          <th><input required class="form-control" type="text" name="cost3" value="benefit"></th>
          <th><input required class="form-control" type="text" name="cost4" value="benefit"></th>
          <th><input required class="form-control" type="text" name="cost5" value="benefit"></th>
          <th><input required class="form-control" type="text" name="cost6" value="benefit"></th>
        </tr>
        </tr>
      </table>

      </table>
      <table class="table table-responsive table-bordered table-hover table-sm table-striped">
        <tr>
        <tr>
          <th class="bg-danger">Variabel pengisian</th>
          <th>1. Sangat rendah</th>
          <th>2. Rendah</th>
          <th>3. Cukup</th>
          <th>4. Tinggi</th>
          <th>5. Sangat tinggi</th>
          <th> </th>

        </tr>
        <tr>
          <th class="bg-primary">Kepentingan</th>
          <th><input required class="form-control" type="text" name="bobot1"></th>
          <th><input required class="form-control" type="text" name="bobot2"></th>
          <th><input required class="form-control" type="text" name="bobot3"></th>
          <th><input required class="form-control" type="text" name="bobot4"></th>
          <th><input required class="form-control" type="text" name="bobot5"></th>
          <th><input required class="form-control" type="text" name="bobot6"></th>
        </tr>

        </tr>
      </table>
      <table cellpadding=3 cellspacing=3 align=center>
        <tr>
          <td></td>
          <td></td>
          <td>
            <div class="row justify-content-center mt-4">
              <input type="submit" class="btn btn-primary" name="hitung" value="Hitung">
              <input type="reset" class="btn btn-warning" name="reset" value="Reset">

            </div>
            <div class="row justify-content-center   mt-3">

              <a href="home.php" class="btn btn-success">home</a>
            </div>
          </td>
        </tr>
      </table>
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


    //pembagi
    $p1 = sqrt((pow($nilai1, 2)) + (pow($nilai4, 2)) + (pow($nilai7, 2)) + (pow($nilai10, 2)));
    $p2 = sqrt((pow($nilai2, 2)) + (pow($nilai5, 2)) + (pow($nilai8, 2)) + (pow($nilai11, 2)));
    $p3 = sqrt((pow($nilai3, 2)) + (pow($nilai6, 2)) + (pow($nilai9, 2)) + (pow($nilai12, 2)));
    $p4 = sqrt((pow($nilai13, 2)) + (pow($nilai15, 2)) + (pow($nilai17, 2)) + (pow($nilai19, 2)));
    $p5 = sqrt((pow($nilai14, 2)) + (pow($nilai16, 2)) + (pow($nilai18, 2)) + (pow($nilai20, 2)));
    $p6 = sqrt((pow($nilai21, 2)) + (pow($nilai22, 2)) + (pow($nilai23, 2)) + (pow($nilai24, 2)));
    //baris1
    $n1 = $nilai1 / $p1;
    $n2 = $nilai4 / $p1;
    $n3 = $nilai7 / $p1;
    $n4 = $nilai10 / $p1;
    //baris2
    $n5 = $nilai2 / $p2;
    $n6 = $nilai5 / $p2;
    $n7 = $nilai8 / $p2;
    $n8 = $nilai11 / $p2;
    //baris3
    $n9 = $nilai3 / $p3;
    $nl1 = $nilai6 / $p3;
    $nl2 = $nilai9 / $p3;
    $nl3 = $nilai12 / $p3;
    //baris4
    $nl4 = $nilai13 / $p4;
    $nl5 = $nilai15 / $p4;
    $nl6 = $nilai17 / $p4;
    $nl7 = $nilai19 / $p4;
    //baris5
    $nl8 = $nilai14 / $p5;
    $nl9 = $nilai16 / $p5;
    $nl10 = $nilai18 / $p5;
    $nl11 = $nilai20 / $p5;
    //baris6
    $nl12 = $nilai21 / $p6;
    $nl13 = $nilai22 / $p6;
    $nl14 = $nilai23 / $p6;
    $nl15 = $nilai24 / $p6;


    //baris1
    $t1 = $n1 * $bobot1;
    $t2 = $n2 * $bobot1;
    $t3 = $n3 * $bobot1;
    $t4 = $n4 * $bobot1;
    //baris2
    $t5 = $n5 * $bobot2;
    $t6 = $n6 * $bobot2;
    $t7 = $n7 * $bobot2;
    $t8 = $n8 * $bobot2;
    //baris3
    $t9 = $n9 * $bobot3;
    $tl1 = $nl1 * $bobot3;
    $tl2 = $nl2 * $bobot3;
    $tl3 = $nl3 * $bobot3;
    //baris4
    $tl4 = $nl4 * $bobot4;
    $tl5 = $nl5 * $bobot4;
    $tl6 = $nl6 * $bobot4;
    $tl7 = $nl7 * $bobot4;
    //baris5
    $tl8 = $nl8 * $bobot5;
    $tl9 = $nl9 * $bobot5;
    $tl10 = $nl10 * $bobot5;
    $tl11 = $nl11 * $bobot5;
    //baris6
    $tl12 = $nl12 * $bobot6;
    $tl13 = $nl13 * $bobot6;
    $tl14 = $nl14 * $bobot6;
    $tl15 = $nl15 * $bobot6;

    $ar1 = array($t1, $t2, $t3, $t4);
    $ar2 = array($t5, $t6, $t7, $t8);
    $ar3 = array($t9, $tl1, $tl2, $tl3);
    $ar4 = array($tl4, $tl5, $tl6, $tl7);
    $ar5 = array($tl8, $tl9, $tl10, $tl11);
    $ar6 = array($tl12, $tl13, $tl14, $tl15);

    if ($cost1 == "benefit") {
      $a1 = min($ar1);
    } else {
      $a1 = max($ar1);
    }
    if ($cost2 == "benefit") {
      $a2 = min($ar2);
    } else {
      $a2 = max($ar2);
    }
    if ($cost3 == "benefit") {
      $a3 = min($ar3);
    } else {
      $a3 = max($ar3);
    }
    if ($cost4 == "benefit") {
      $a4 = min($ar4);
    } else {
      $a4 = max($ar4);
    }
    if ($cost5 == "benefit") {
      $a5 = min($ar5);
    } else {
      $a5 = max($ar5);
    }
    if ($cost6 == "benefit") {
      $a6 = min($ar6);
    } else {
      $a6 = max($ar6);
    }

    if ($cost1 == "benefit") {
      $al1 = max($ar1);
    } else {
      $al1 = min($ar1);
    }
    if ($cost2 == "benefit") {
      $al2 = max($ar2);
    } else {
      $al2 = min($ar2);
    }
    if ($cost3 == "benefit") {
      $al3 = max($ar3);
    } else {
      $al3 = min($ar3);
    }
    if ($cost4 == "benefit") {
      $al4 = max($ar4);
    } else {
      $al4 = min($ar4);
    }
    if ($cost5 == "benefit") {
      $al5 = max($ar5);
    } else {
      $al5 = min($ar5);
    }
    if ($cost6 == "benefit") {
      $al6 = max($ar6);
    } else {
      $al6 = min($ar6);
    }

    $m1 = $a1 - $t1;
    $m2 = $a1 - $t2;
    $m3 = $a1 - $t3;
    $m4 = $a1 - $t4;
    $m5 = $a2 - $t5;
    $m6 = $a2 - $t6;
    $m7 = $a2 - $t7;
    $m8 = $a2 - $t8;
    $m9 = $a3 - $t9;
    $m10 = $a2 - $tl1;
    $m11 = $a2 - $tl2;
    $m12 = $a2 - $tl3;
    $m13 = $a4 - $tl4;
    $m14 = $a4 - $tl5;
    $m15 = $a4 - $tl6;
    $m16 = $a4 - $tl7;
    $m17 = $a5 - $tl8;
    $m18 = $a5 - $tl8;
    $m19 = $a5 - $tl10;
    $m20 = $a5 - $tl11;
    $m21 = $a6 - $tl12;
    $m22 = $a6 - $tl13;
    $m23 = $a6 - $tl14;
    $m24 = $a6 - $tl15;

    $ml1 = $al1 - $t1;
    $ml2 = $al1 - $t2;
    $ml3 = $al1 - $t3;
    $ml4 = $al1 - $t4;
    $ml5 = $al2 - $t5;
    $ml6 = $al2 - $t6;
    $ml7 = $al2 - $t7;
    $ml8 = $al2 - $t8;
    $ml9 = $al3 - $t9;
    $ml10 = $al2 - $tl1;
    $ml11 = $al2 - $tl2;
    $ml12 = $al2 - $tl3;
    $ml13 = $al4 - $tl4;
    $ml14 = $al4 - $tl5;
    $ml15 = $al4 - $tl6;
    $ml16 = $al4 - $tl7;
    $ml17 = $al5 - $tl8;
    $ml18 = $al5 - $tl8;
    $ml19 = $al5 - $tl10;
    $ml20 = $al5 - $tl11;
    $ml21 = $al6 - $tl12;
    $ml22 = $al6 - $tl13;
    $ml23 = $al6 - $tl14;
    $ml24 = $al6 - $tl15;

    //D+
    $d1 = sqrt((pow($m1, 2)) + (pow($m2, 2)) + (pow($m3, 2)) + (pow($m4, 2)) + (pow($m5, 2)) + (pow($m6, 2)));
    $d2 = sqrt((pow($m7, 2)) + (pow($m8, 2)) + (pow($m9, 2)) + (pow($m10, 2)) + (pow($m11, 2)) + (pow($m12, 2)));
    $d3 = sqrt((pow($m13, 2)) + (pow($m14, 2)) + (pow($m15, 2)) + (pow($m16, 2)) + (pow($m17, 2)) + (pow($m18, 2)));
    $d4 = sqrt((pow($m19, 2)) + (pow($m20, 2)) + (pow($m21, 2)) + (pow($m22, 2)) + (pow($m23, 2)) + (pow($m24, 2)));

    //D-
    $dl1 = sqrt((pow($ml1, 2)) + (pow($ml2, 2)) + (pow($ml3, 2)) + (pow($ml4, 2)) + (pow($ml5, 2)) + (pow($ml6, 2)));
    $dl2 = sqrt((pow($ml7, 2)) + (pow($ml8, 2)) + (pow($ml9, 2)) + (pow($ml10, 2)) + (pow($ml11, 2)) + (pow($ml12, 2)));
    $dl3 = sqrt((pow($ml13, 2)) + (pow($ml14, 2)) + (pow($ml15, 2)) + (pow($ml16, 2)) + (pow($ml17, 2)) + (pow($ml18, 2)));
    $dl4 = sqrt((pow($ml19, 2)) + (pow($ml20, 2)) + (pow($ml21, 2)) + (pow($ml22, 2)) + (pow($ml23, 2)) + (pow($ml24, 2)));



    $ag1 = $d1 - $dl1;
    $ag2 = $d2 - $dl2;
    $ag3 = $d3 - $dl3;
    $ag4 = $d4 - $dl4;


    $sum      = $ag1 / $d1;
    $sum1     = $ag2 / $d2;
    $sum2     = $ag3 / $d3;
    $sum3     = $ag4 / $d4;
    $all = array($sum, $sum1, $sum2, $sum3);
    $short = array($nama1 => $sum, $nama2 => $sum1, $nama3 => $sum2, $nama4 => $sum3);
    arsort($short);

    echo " 
    <div class='container'>
        <h3 align=center>Alternatif :</h3>
            <table  class='table table-bordered table-hover table-sm table-striped'>
                      
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
            <table  class='table table-bordered table-hover table-sm table-striped'>
                       
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
                <h3 align=center>Bobot Kepentingan:</h3>
            <table  class='table table-bordered table-hover table-sm table-striped'>
                       
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
                 <h3 align=center>Cost Benefit :</h3>
            <table  class='table table-bordered table-hover table-sm table-striped'>
                       
                     <tr>       
                        <tr>
                        <td>$cost1</td>
                        <td>$cost2</td>
                        <td>$cost3</td>
                        <td>$cost4</td>
                        <td>$cost5</td>
                        <td>$cost6</td>
                        
                    </tr>
                    </tr>
                  </table>

                <table class='table table-bordered table-hover table-sm table-striped'>
                     <tr>
                        <tr>
                        <th bgcolor='blue'>total kepentingan</th>
                        <th>$sumbobot</th>
                    </tr>
                    </tr>
                </table>
                 
                  

                 
            <table class='table table-bordered table-hover table-sm table-striped'>
                <tr>
                	<th>Alternatif</th>
                    <th>$faktor1</th>
                    <th>$faktor2</th>
                    <th>$faktor3</th>
                    <th>$faktor4</th>
                    <th>$faktor5</th>
                    <th>$faktor6</th>
                    <th>Hasil</th>
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
    echo number_format($sum, 15, ',', '.');
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
    echo number_format($sum1, 15, ',', '.');
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
    echo number_format($sum2, 15, ',', '.');
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
    echo number_format($sum3, 15, ',', '.');
    echo "</td>
                </tr>
                
                 <table  class='table table-bordered table-hover table-sm table-striped'>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>Pembagi</th>
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
                <h3 align=center>Ternormalisasi :</h3>
                <table  class='table table-bordered table-hover table-sm table-striped'>
                     <tr>
                    <tr>
                        <td align='right'>";
    echo number_format($n1, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($n2, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($n3, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($n4, 5, ',', '.');
    echo "</td>  
                    </tr>
                     <tr>
                        <td align='right'>";
    echo number_format($n5, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($n6, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($n7, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($n8, 5, ',', '.');
    echo "</td>  
                    </tr>
                      <tr>
                        <td align='right'>";
    echo number_format($n9, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nl1, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nl2, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nl3, 5, ',', '.');
    echo "</td>  
                    </tr>
                     <tr>
                        <td align='right'>";
    echo number_format($nl4, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nl5, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nl6, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nl7, 5, ',', '.');
    echo "</td>  
                    </tr>
                    <tr>
                        <td align='right'>";
    echo number_format($nl8, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nl9, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nl10, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nl11, 5, ',', '.');
    echo "</td>  
                    </tr>
                     <tr>
                        <td align='right'>";
    echo number_format($nl12, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nl13, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nl14, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($nl15, 5, ',', '.');
    echo "</td>  
                    </tr>
                    </tr>
                </table>
                 <h3 align=center>Terbobot :</h3>
                <table  class='table table-bordered table-hover table-sm table-striped'>
                     <tr>
                    <tr>
                        <td align='right'>";
    echo number_format($t1, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($t2, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($t3, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($t4, 5, ',', '.');
    echo "</td>  
                    </tr>
                     <tr>
                        <td align='right'>";
    echo number_format($t5, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($t6, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($t7, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($t8, 5, ',', '.');
    echo "</td>  
                    </tr>
                      <tr>
                        <td align='right'>";
    echo number_format($t9, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($tl1, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($tl2, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($tl3, 5, ',', '.');
    echo "</td>  
                    </tr>
                     <tr>
                        <td align='right'>";
    echo number_format($tl4, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($tl5, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($tl6, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($tl7, 5, ',', '.');
    echo "</td>  
                    </tr>
                    <tr>
                        <td align='right'>";
    echo number_format($tl8, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($tl9, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($tl10, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($tl11, 5, ',', '.');
    echo "</td>  
                    </tr>
                     <tr>
                        <td align='right'>";
    echo number_format($tl12, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($tl13, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($tl14, 5, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($tl15, 5, ',', '.');
    echo "</td>  
                    </tr>
                    </tr>
                </table>
                
                  <table  class='table table-bordered table-hover table-sm table-striped'>
                     <tr>
                        <tr>
                        <th bgcolor='blue'>A +</th>
                        <td align='right'>";
    echo number_format($a1, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($a2, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($a3, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($a4, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($a5, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($a6, 2, ',', '.');
    echo "</td>
                    </tr>
                    </tr>
                </table>
                 <table  class='table table-bordered table-hover table-sm table-striped'>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>A -</th>
                        <td align='right'>";
    echo number_format($al1, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($al2, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($al3, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($al4, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($al5, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($al6, 2, ',', '.');
    echo "</td>
                    </tr>
                    </tr>
                </table>

                 <table  class='table table-bordered table-hover table-sm table-striped'>
                     <tr>
                        <tr>
                        <th bgcolor='green'>D +</th>
                        <td align='right'>";
    echo number_format($d1, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($d2, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($d3, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($d4, 2, ',', '.');
    echo "</td>
                  
                    </tr>
                    </tr>
                </table>
                 <table  class='table table-bordered table-hover table-sm table-striped'>
                     <tr>
                        <tr>
                        <th bgcolor='red'>D -</th>
                        <td align='right'>";
    echo number_format($dl1, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($dl2, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($dl3, 2, ',', '.');
    echo "</td>
                        <td align='right'>";
    echo number_format($dl4, 2, ',', '.');
    echo "</td>
                       
                    </tr>
                    </tr>
                </table>

                <table cellpadding=3 cellspacing=3
                  align=center>
                    <tr>
                    <td>Hasil tertinggi adalah ";
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
          
                </table>
                </div>";
    }
  }
  include('footer.php');
  ?>


</body>
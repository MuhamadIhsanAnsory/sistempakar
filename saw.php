<!DOCTYPE html>
<html>

<head>
     <title>SisKar</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <?php include('header.php') ?>
</head>

<body class="bg-secondary">
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
     <h3 class="text-center my-3">Perhitungan Penentuan Alternatif Produk Terbaik dengan Metode SAW</h3>
     <div class="container">
          <p><i>**Wajib diisi semua</i></p>
     </div>
     <div class="justify-content-center row">
          <form method="POST">
               <table class="table table-responsive table-bordered table-hover table-sm table-striped">
                    <tr>
                         <th rowspan="2" bgcolor="yellow">Alternatif</th>
                         <th colspan="6" bgcolor="#00ff80">Faktor Penilaian</th>
                    </tr>

                    <tr>
                         <th>
                              <input type="hidden" name="faktor1" value="Harga">
                              <label>Harga</label>
                         </th>
                         <th>
                              <input type="hidden" name="faktor2" value="Kualitas">
                              <label>Kualitas</label>
                         </th>
                         <th>
                              <input type="hidden" name="faktor3" value="Fitur">
                              <label>Fitur</label>
                         </th>
                         <th>
                              <input type="hidden" name="faktor4" value="Populer">
                              <label>Populer</label>
                         </th>
                         <th>
                              <input type="hidden" name="faktor5" value="Purna Jual">
                              <label>Purna Jual</label>
                         </th>
                         <th>
                              <input type="hidden" name="faktor6" value="Keawetan">
                              <label>Keawetan</label>
                         </th>
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
                         <th bgcolor="blue" class="text-white">Kepentingan</th>
                         <th><input required class="form-control" type="text" name="bobot1" value="0.2"></th>
                         <th><input required class="form-control" type="text" name="bobot2" value="0.25"></th>
                         <th><input required class="form-control" type="text" name="bobot3" value="0.2"></th>
                         <th><input required class="form-control" type="text" name="bobot4" value="0.125"></th>
                         <th><input required class="form-control" type="text" name="bobot5" value="0.125"></th>
                         <th><input required class="form-control" type="text" name="bobot6" value="0.1"></th>
                    </tr>
                    </tr>
               </table>
               <div class="justify-content-center row">
                    <input type="submit" class="btn btn-primary" name="hitung" value="Hitung">
                    <input type="reset" class="btn btn-warning" name="reset" value="Reset">
               </div>
               <div class="justify-content-center row mt-3">
                    <a href="home.php" class="btn btn-success">home</a>
               </div>
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

          $ar1 = array($nilai1, $nilai7, $nilai10, $nilai4);
          $ar2 = array($nilai2, $nilai5, $nilai8, $nilai11);
          $ar3 = array($nilai3, $nilai6, $nilai9, $nilai12);
          $ar4 = array($nilai13, $nilai15, $nilai17, $nilai19);
          $ar5 = array($nilai14, $nilai16, $nilai18, $nilai20);
          $ar6 = array($nilai21, $nilai22, $nilai23, $nilai24);
          if ($cost1 == "cost") {
               $p1 = min($ar1);
          } else {
               $p1 = max($ar1);
          }
          if ($cost2 == "cost") {
               $p2 = min($ar2);
          } else {
               $p2 = max($ar2);
          }
          if ($cost3 == "cost") {
               $p3 = min($ar3);
          } else {
               $p3 = max($ar3);
          }
          if ($cost4 == "cost") {
               $p4 = min($ar4);
          } else {
               $p4 = max($ar4);
          }
          if ($cost5 == "cost") {
               $p5 = min($ar5);
          } else {
               $p5 = max($ar5);
          }
          if ($cost6 == "cost") {
               $p6 = min($ar6);
          } else {
               $p6 = max($ar6);
          }
          //baris1
          if ($cost1 == "cost") {
               $n1 = (min($ar1)) / $nilai1;
          } else {
               $n1 = (max($ar1)) / $nilai1;
          }
          if ($cost1 == "cost") {
               $n2 = (min($ar1)) / $nilai4;
          } else {
               $n2 = (max($ar1)) / $nilai4;
          }
          if ($cost1 == "cost") {
               $n3 = (min($ar1)) / $nilai7;
          } else {
               $n3 = (max($ar1)) / $nilai7;
          }
          if ($cost1 == "cost") {
               $n4 = (min($ar1)) / $nilai10;
          } else {
               $n4 = (max($ar1)) / $nilai10;
          }
          //baris2
          if ($cost2 == "cost") {
               $n5 = (min($ar2)) / $nilai2;
          } else {
               $n5 = (max($ar2)) / $nilai2;
          }
          if ($cost2 == "cost") {
               $n6 = (min($ar2)) / $nilai5;
          } else {
               $n6 = (max($ar2)) / $nilai5;
          }
          if ($cost2 == "cost") {
               $n7 = (min($ar2)) / $nilai8;
          } else {
               $n7 = (max($ar2)) / $nilai8;
          }
          if ($cost2 == "cost") {
               $n8 = (min($ar2)) / $nilai11;
          } else {
               $n8 = (max($ar2)) / $nilai11;
          }
          //baris3
          if ($cost3 == "cost") {
               $n9 = (min($ar3)) / $nilai3;
          } else {
               $n9 = (max($ar3)) / $nilai3;
          }
          if ($cost3 == "cost") {
               $nl1 = (min($ar3)) / $nilai6;
          } else {
               $nl1 = (max($ar3)) / $nilai6;
          }
          if ($cost3 == "cost") {
               $nl2 = (min($ar3)) / $nilai9;
          } else {
               $nl2 = (max($ar3)) / $nilai9;
          }
          if ($cost3 == "cost") {
               $nl3 = (min($ar3)) / $nilai12;
          } else {
               $nl3 = (max($ar3)) / $nilai12;
          }
          //baris4
          if ($cost4 == "cost") {
               $nl4 = (min($ar4)) / $nilai13;
          } else {
               $nl4 = (max($ar4)) / $nilai13;
          }
          if ($cost4 == "cost") {
               $nl5 = (min($ar4)) / $nilai15;
          } else {
               $nl5 = (max($ar4)) / $nilai15;
          }
          if ($cost4 == "cost") {
               $nl6 = (min($ar4)) / $nilai17;
          } else {
               $nl6 = (max($ar4)) / $nilai17;
          }
          if ($cost4 == "cost") {
               $nl7 = (min($ar4)) / $nilai19;
          } else {
               $nl7 = (max($ar4)) / $nilai19;
          }
          //baris5
          if ($cost5 == "cost") {
               $nl8 = (min($ar5)) / $nilai14;
          } else {
               $nl8 = (max($ar5)) / $nilai14;
          }
          if ($cost5 == "cost") {
               $nl9 = (min($ar5)) / $nilai16;
          } else {
               $nl9 = (max($ar5)) / $nilai16;
          }
          if ($cost5 == "cost") {
               $nl10 = (min($ar5)) / $nilai18;
          } else {
               $nl10 = (max($ar5)) / $nilai18;
          }
          if ($cost5 == "cost") {
               $nl11 = (min($ar5)) / $nilai20;
          } else {
               $nl11 = (max($ar5)) / $nilai20;
          }
          //baris6
          if ($cost6 == "cost") {
               $nl12 = (min($ar6)) / $nilai21;
          } else {
               $nl12 = (max($ar6)) / $nilai21;
          }
          if ($cost6 == "cost") {
               $nl13 = (min($ar6)) / $nilai22;
          } else {
               $nl13 = (max($ar6)) / $nilai22;
          }
          if ($cost6 == "cost") {
               $nl14 = (min($ar6)) / $nilai23;
          } else {
               $nl14 = (max($ar6)) / $nilai23;
          }
          if ($cost6 == "cost") {
               $nl15 = (min($ar6)) / $nilai24;
          } else {
               $nl15 = (max($ar6)) / $nilai24;
          }



          $sum      = ($p1 * $n1) + ($p2 * $n5) + ($p3 * $n9) + ($p4 * $nl4) + ($p5 * $nl8) + ($p6 * $nl12);
          $sum1     = ($p1 * $n2) + ($p2 * $n6) + ($p3 * $nl1) + ($p4 * $nl5) + ($p5 * $nl9) + ($p6 * $nl13);
          $sum2     = ($p1 * $n3) + ($p2 * $n7) + ($p3 * $nl2) + ($p4 * $nl6) + ($p5 * $nl10) + ($p6 * $nl14);
          $sum3     = ($p1 * $n4) + ($p2 * $n8) + ($p3 * $nl3) + ($p4 * $nl7) + ($p5 * $nl11) + ($p6 * $nl15);
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
                        <td>$bobot6</td>
                        
                    </tr>
                    </tr>
               
                </table>
                 <h3 align=center>Cost Benefit :</h3>
            <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                       
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

                <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
                          <td> </td>
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
                        <th bgcolor='yellow'>pembagi</th>
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
                <h3 align=center>Normalisasi :</h3>
                <table border='1' cellpadding=3 cellspacing=3
                        align=center>
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

     <?php include('footer.php'); ?>
</body>
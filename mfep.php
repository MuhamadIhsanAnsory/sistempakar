<!DOCTYPE html>
<html>
    <head>
        <title>SisKar</title>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
table {
  border-collapse: collapse;
  width: 500px;
}
th {
  background-color: #54585d;
  border: 1px solid #54585d;
}
th:hover {
  background-color: #64686e;
}
th a {
  display: block;
  text-decoration:none;
  padding: 10px;
  color: #ffffff;
  font-weight: bold;
  font-size: 13px;
}
th a i {
  margin-left: 5px;
  color: rgba(255,255,255,0.4);
}
td {
  padding: 10px;
  color: #636363;
  border: 1px solid #dddfe1;
}
tr {
  background-color: #ffffff;
}
tr .highlight {
  background-color: #f9fafb;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1167b1 url(images/bg1.jpeg) 50% 0% no-repeat ;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>
	<h3 align=center>Perhitungan Penentuan Alternatif Produk Terbaik dengan Metode MFEP (Multifactor Evaluation Process)</h3>
  <br>
	<form method="POST">
    <table border="1"cellpadding=3 cellspacing=3
            align=center>
        <tr>
            <th rowspan="3" bgcolor="yellow">Altrnatif</th>
            <th colspan="3" bgcolor="#00ff80">faktor penilaian</th>
        </tr>
         <tr>
            <th>0.5</th>
            <th>0.3</th>
            <th>0.2</th>
            <th colspan="1" bgcolor="blue">1</th>
        </tr>
        <tr>
            <th><input type="text" name="faktor1" value="Hardware"></th>
            <th><input type="text" name="faktor2"  value="Software"></th>
            <th><input type="text" name="faktor3" value="Dukungan vendor"></th>
        </tr>
        <tr>
            <td><input type="text" name="nama1" value="Apple"></td>
            <td><input type="text" name="nilai1"></td>
            <td><input type="text" name="nilai2"></td>
            <td><input type="text" name="nilai3"></td>
        </tr>
        <tr>
            <td><input type="text" name="nama2" value="Asus"></td>
            <td><input type="text" name="nilai4"></td>
             <td><input type="text" name="nilai5"></td>
              <td><input type="text" name="nilai6"></td>
        </tr>
        <tr>
            <td><input type="text" name="nama3" value="Hp"></td>
            <td><input type="text" name="nilai7"></td>
            <td><input type="text" name="nilai8"></td>
            <td><input type="text" name="nilai9"></td>
        </tr>
        <tr>
            <td><input type="text" name="nama4" value="Lenovo"></td>
            <td><input type="text" name="nilai10"></td>
            <td><input type="text" name="nilai11"></td>
            <td><input type="text" name="nilai12"></td>
            
        </tr>

    </table>
    <table cellpadding=3 cellspacing=3
            align=center>
    	 <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" class="w3-button w3-black" name="hitung" value="Hitung">
                    <input type="reset" class="w3-button w3-black" name="reset" value="Reset">
                    <a href="home.php" class="w3-button w3-black">home</a>
                </td>
            </tr>
    </table>
     </form>
    <hr />
    <h3 align=center>Hasil :</h3>
    <?php
    if(isset($_POST['hitung'])){
    	$faktor1    =$_POST['faktor1'];
    	$faktor2    =$_POST['faktor2'];
    	$faktor3    =$_POST['faktor3'];
        $nama1    =$_POST['nama1'];
        $nama2    =$_POST['nama2'];
        $nama3    =$_POST['nama3'];
        $nama4    =$_POST['nama4'];
        $nilai1    =$_POST['nilai1'];
        $nilai2    =$_POST['nilai2'];
        $nilai3    =$_POST['nilai3'];
        $nilai4    =$_POST['nilai4'];
        $nilai5    =$_POST['nilai5'];
        $nilai6    =$_POST['nilai6'];
        $nilai7    =$_POST['nilai7'];
        $nilai8    =$_POST['nilai8'];
        $nilai9    =$_POST['nilai9'];
        $nilai10    =$_POST['nilai10'];
        $nilai11    =$_POST['nilai11'];
        $nilai12    =$_POST['nilai12'];
        
        $a = 0.5;
        $b = 0.3;
        $c = 0.2;
        $col1    =$nilai1*$a;
        $col2    =$nilai2*$b;
        $col3    =$nilai3*$c;
        $col1b    =$nilai4*$a;
        $col2b    =$nilai5*$b;
        $col3b    =$nilai6*$c;
        $col1c    =$nilai7*$a;
        $col2c    =$nilai8*$b;
        $col3c    =$nilai9*$c;
        $col1d    =$nilai10*$a;
        $col2d    =$nilai11*$b;
        $col3d    =$nilai12*$c;
        $sum     =$col1+$col2+$col3;
        $sum1     =$col1b+$col2b+$col3b;
        $sum2     =$col1c+$col2c+$col3c;
        $sum3     =$col1d+$col2d+$col3d;
        $all=array($sum,$sum1,$sum2,$sum3);
        $short=array($nama1=>$sum,$nama2=>$sum1,$nama3=>$sum2,$nama4=>$sum3);
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
                        <td align='right'>";echo number_format($a,2,',','.');echo "</td>
                        <td align='right'>";echo number_format($b,2,',','.');echo "</td>
                        <td align='right'>";echo number_format($c,2,',','.');echo "</td>
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
                    
                    <td align='right'>";echo number_format($nilai1,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai4,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai7,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai10,0,',','.');echo "</td>
                </tr>
                <tr>    
                    
                    <td align='right'>";echo number_format($nilai2,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai5,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai8,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai11,0,',','.');echo "</td>
                </tr>
                <tr>    
                    
                    <td align='right'>";echo number_format($nilai3,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai5,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai8,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai12,0,',','.');echo "</td>
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
                    
                    <td align='right'>";echo number_format($col1,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col2,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col3,0,',','.');echo "</td>
                    
                </tr>
                <tr>    
                    
                    <td align='right'>";echo number_format($col1b,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col2b,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col3b,0,',','.');echo "</td>
                   
                </tr>
                <tr>    
                    
                    <td align='right'>";echo number_format($col1c,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col2c,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col3c,0,',','.');echo "</td>
                    
                </tr>
                <tr>    
                    
                    <td align='right'>";echo number_format($col1d,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col2d,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col3d,0,',','.');echo "</td>
                    
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
                        <td align='right'>";echo number_format($sum,2,',','.');echo "</td>
                        <td align='right'>";echo number_format($sum1,2,',','.');echo "</td>
                        <td align='right'>";echo number_format($sum2,2,',','.');echo "</td>
                        <td align='right'>";echo number_format($sum3,2,',','.');echo "</td>
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
                   	<td align='right'>";echo number_format($col1,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col2,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col3,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($sum,0,',','.');echo "</td>
                </tr>
                <tr>    
                    <td>$nama2</td>
                   	<td align='right'>";echo number_format($col1b,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col2b,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col3b,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($sum1,0,',','.');echo "</td>
                </tr>
                <tr>    
                    <td>$nama3</td>
                   	<td align='right'>";echo number_format($col1c,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col2c,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col3c,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($sum2,0,',','.');echo "</td>
                </tr>
                <tr>    
                    <td>$nama4</td>
                   	<td align='right'>";echo number_format($col1d,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col2d,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($col3d,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($sum3,0,',','.');echo "</td>
                </tr>
                <table cellpadding=3 cellspacing=3
          		  align=center>
    	 			
   				 </table>           
            </table>
            <table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
            <td align='center'>hasil tertinggi adalah ";
            echo max($all);"</td>
              </tr>
                </table>
                </table>           
        ";
  echo "<br>";
  echo "<tr>";
  echo "<td align='center'>hasil ranking :</td>";
  echo "<br>";
  

          foreach($short as $x => $x_value) {
  echo "<table  cellpadding=3 cellspacing=3
                        align=center>
                 <tr>
          <td align='center'>";echo "  " . $x . "  " . $x_value;echo"</td>
          </tr>
                </table>";

  
}
}
    
?>


</body>
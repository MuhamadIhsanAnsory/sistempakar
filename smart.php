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
	<h3 align=center>Sistem Pakar Metode SMART</h3>
	<form method="POST">
    <table border="1"cellpadding=3 cellspacing=3
            align=center>
        <tr>
            <th rowspan="2" bgcolor="yellow">Altrnatif</th>
            <th colspan="5" bgcolor="#00ff80">faktor penilaian</th>
        </tr>
        
        <tr>
            <th><input type="text" name="faktor1"></th>
            <th><input type="text" name="faktor2"></th>
            <th><input type="text" name="faktor3"></th>
            <th><input type="text" name="faktor4"></th>
            <th><input type="text" name="faktor5"></th>
        </tr>
        <tr>
            <td><input type="text" name="nama1"></td>
            <td><input type="text" name="nilai1"></td>
            <td><input type="text" name="nilai2"></td>
            <td><input type="text" name="nilai3"></td>
            <td><input type="text" name="nilai13"></td>
            <td><input type="text" name="nilai14"></td>
        </tr>
        <tr>
            <td><input type="text" name="nama2"></td>
            <td><input type="text" name="nilai4"></td>
             <td><input type="text" name="nilai5"></td>
              <td><input type="text" name="nilai6"></td>
              <td><input type="text" name="nilai15"></td>
              <td><input type="text" name="nilai16"></td>

        </tr>
        <tr>
            <td><input type="text" name="nama3"></td>
            <td><input type="text" name="nilai7"></td>
            <td><input type="text" name="nilai8"></td>
            <td><input type="text" name="nilai9"></td>
            <td><input type="text" name="nilai17"></td>
            <td><input type="text" name="nilai18"></td>
        </tr>
        <tr>
            <td><input type="text" name="nama4"></td>
            <td><input type="text" name="nilai10"></td>
            <td><input type="text" name="nilai11"></td>
            <td><input type="text" name="nilai12"></td>
            <td><input type="text" name="nilai19"></td>
            <td><input type="text" name="nilai20"></td>
            
        </tr>

    </table>
      <table border="1" cellpadding=3 cellspacing=3
            align=center>
         <tr>
            <tr>
            <th bgcolor="blue">bobot</th>
            <th><input type="text" name="bobot1"></th>
            <th><input type="text" name="bobot2"></th>
            <th><input type="text" name="bobot3"></th>
            <th><input type="text" name="bobot4"></th>
            <th><input type="text" name="bobot5"></th>
        </tr>
        </tr>
    </table>
    <table  cellpadding=3 cellspacing=3
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
        $faktor4    =$_POST['faktor4'];
        $faktor5    =$_POST['faktor5'];
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
        $nilai13    =$_POST['nilai13'];
        $nilai14    =$_POST['nilai14'];
        $nilai15    =$_POST['nilai15'];
        $nilai16    =$_POST['nilai16'];
        $nilai17    =$_POST['nilai17'];
        $nilai18    =$_POST['nilai18'];
        $nilai19    =$_POST['nilai19'];
        $nilai20    =$_POST['nilai20'];
        $bobot1    =$_POST['bobot1'];
        $bobot2    =$_POST['bobot2'];
        $bobot3    =$_POST['bobot3'];
        $bobot4    =$_POST['bobot4'];
        $bobot5    =$_POST['bobot5'];
        
        $sum      =($nilai1*$bobot1)+($nilai2*$bobot2)+($nilai3*$bobot3)+($nilai13*$bobot4)+($nilai14*$bobot5);
        $sum1     =($nilai4*$bobot1)+($nilai5*$bobot2)+($nilai6*$bobot3)+($nilai15*$bobot4)+($nilai16*$bobot5);
        $sum2     =($nilai7*$bobot1)+($nilai8*$bobot2)+($nilai9*$bobot3)+($nilai17*$bobot4)+($nilai18*$bobot5);
        $sum3     =($nilai10*$bobot1)+($nilai11*$bobot2)+($nilai12*$bobot3)+($nilai19*$bobot4)+($nilai20*$bobot5);
        $sumbobot      =$bobot1+$bobot2+$bobot3+$bobot4;
        $nm1   =$bobot1/$sumbobot;
        $nm2   =$bobot2/$sumbobot;
        $nm3   =$bobot3/$sumbobot;
        $nm4   =$bobot4/$sumbobot;
        $nm5   =$bobot5/$sumbobot;
        $sumnm =$nm1+$nm2+$nm3+$nm4+$nm5;
        $all=array($sum,$sum1,$sum2,$sum3);
       
        echo "
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
                        <td align='right'>";echo number_format($nm1,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nm2,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nm3,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nm4,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nm5,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($sumnm,0,',','.');echo "</td>
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
                   	<td align='right'>";echo number_format($nilai1,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai2,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai3,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai13,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai14,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($sum,0,',','.');echo "</td>
                </tr>
                <tr>    
                    <td>$nama2</td>
                   	<td align='right'>";echo number_format($nilai4,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai5,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai6,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai15,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai16,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($sum1,0,',','.');echo "</td>
                </tr>
                <tr>    
                    <td>$nama3</td>
                   	<td align='right'>";echo number_format($nilai7,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai8,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai9,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai17,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai18,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($sum2,0,',','.');echo "</td>
                </tr>
                <tr>    
                    <td>$nama4</td>
                   	<td align='right'>";echo number_format($nilai10,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai11,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai12,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai19,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai20,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($sum3,0,',','.');echo "</td>
                </tr>
                <table cellpadding=3 cellspacing=3
          		  align=center>
    	 			<tr>
    	 			<td>hasil tertinggi adalah ";echo max($all);"</td>
            		</tr>
   				 </table>
               
            </table>
        ";
    }
?>


</body>
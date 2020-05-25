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
	<h3 align=center>Sistem Pakar Metode AHP</h3>
	<form method="POST">
    <table border="1"cellpadding=3 cellspacing=3
            align=center>
        <tr>
            <th rowspan="2" bgcolor="yellow">Altrnatif</th>
            <th colspan="6" bgcolor="#00ff80">faktor penilaian</th>
        </tr>
        
        <tr>
            <th><input type="text" name="faktor1"></th>
            <th><input type="text" name="faktor2"></th>
            <th><input type="text" name="faktor3"></th>
            <th><input type="text" name="faktor4"></th>
            <th><input type="text" name="faktor5"></th>
            <th><input type="text" name="faktor6"></th>
        </tr>
        <tr>
            <td><input type="text" name="nama1"></td>
            <td><input type="text" name="nilai1"></td>
            <td><input type="text" name="nilai2"></td>
            <td><input type="text" name="nilai3"></td>
            <td><input type="text" name="nilai13"></td>
            <td><input type="text" name="nilai14"></td>
            <td><input type="text" name="nilai21"></td>
        </tr>
        <tr>
            <td><input type="text" name="nama2"></td>
            <td><input type="text" name="nilai4"></td>
             <td><input type="text" name="nilai5"></td>
              <td><input type="text" name="nilai6"></td>
              <td><input type="text" name="nilai15"></td>
              <td><input type="text" name="nilai16"></td>
              <td><input type="text" name="nilai22"></td>

        </tr>
        <tr>
            <td><input type="text" name="nama3"></td>
            <td><input type="text" name="nilai7"></td>
            <td><input type="text" name="nilai8"></td>
            <td><input type="text" name="nilai9"></td>
            <td><input type="text" name="nilai17"></td>
            <td><input type="text" name="nilai18"></td>
            <td><input type="text" name="nilai23"></td>
        </tr>
        <tr>
            <td><input type="text" name="nama4"></td>
            <td><input type="text" name="nilai10"></td>
            <td><input type="text" name="nilai11"></td>
            <td><input type="text" name="nilai12"></td>
            <td><input type="text" name="nilai19"></td>
            <td><input type="text" name="nilai20"></td>
            <td><input type="text" name="nilai24"></td>
            
        </tr>

    </table>
      <table border="1" cellpadding=3 cellspacing=3
            align=center>
         <tr>
            <tr>
            <td bgcolor="yellow">variable cost & benefit</td>   
            <th><input type="text" name="cost1"></th>
            <th><input type="text" name="cost2"></th>
            <th><input type="text" name="cost3"></th>
            <th><input type="text" name="cost4"></th>
            <th><input type="text" name="cost5"></th>
            <th><input type="text" name="cost6"></th>
        </tr>
        </tr>
    </table> 
    <h3 align=center>Bobot penilaian :</h3>   

     <table border="1"cellpadding=3 cellspacing=3
            align=center>
        <tr>
            <th rowspan="1" bgcolor="yellow">Nama Penilaian</th>
            <th colspan="6" rowspan="1" bgcolor="#00ff80"> </th>
        </tr>        
        <tr>
            <td><input type="text" name="namab1"></td>
            <td><input type="text" name="nilaib1"></td>
            <td><input type="text" name="nilaib2"></td>
            <td><input type="text" name="nilaib3"></td>
            <td><input type="text" name="nilaib13"></td>
            <td><input type="text" name="nilaib14"></td>
            <td><input type="text" name="nilaib21"></td>
        </tr>
        <tr>
            <td><input type="text" name="namab2"></td>
            <td><input type="text" name="nilaib4"></td>
             <td><input type="text" name="nilaib5"></td>
              <td><input type="text" name="nilaib6"></td>
              <td><input type="text" name="nilaib15"></td>
              <td><input type="text" name="nilaib16"></td>
              <td><input type="text" name="nilaib22"></td>

        </tr>
        <tr>
            <td><input type="text" name="namab3"></td>
            <td><input type="text" name="nilaib7"></td>
            <td><input type="text" name="nilaib8"></td>
            <td><input type="text" name="nilaib9"></td>
            <td><input type="text" name="nilaib17"></td>
            <td><input type="text" name="nilaib18"></td>
            <td><input type="text" name="nilaib23"></td>
        </tr>
        <tr>
            <td><input type="text" name="namab4"></td>
            <td><input type="text" name="nilaib10"></td>
            <td><input type="text" name="nilaib11"></td>
            <td><input type="text" name="nilaib12"></td>
            <td><input type="text" name="nilaib19"></td>
            <td><input type="text" name="nilaib20"></td>
            <td><input type="text" name="nilaib24"></td>
            
        </tr>
        <tr>
            <td><input type="text" name="namab5"></td>
            <td><input type="text" name="nilaib25"></td>
            <td><input type="text" name="nilaib26"></td>
            <td><input type="text" name="nilaib27"></td>
            <td><input type="text" name="nilaib28"></td>
            <td><input type="text" name="nilaib29"></td>
            <td><input type="text" name="nilaib30"></td>
        </tr>
        <tr>
            <td><input type="text" name="namab6"></td>
            <td><input type="text" name="nilaib31"></td>
            <td><input type="text" name="nilaib32"></td>
            <td><input type="text" name="nilaib33"></td>
            <td><input type="text" name="nilaib34"></td>
            <td><input type="text" name="nilaib35"></td>
            <td><input type="text" name="nilaib36"></td>
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
        $faktor6    =$_POST['faktor6'];
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
        $nilai21    =$_POST['nilai21'];
        $nilai22    =$_POST['nilai22'];
        $nilai23    =$_POST['nilai23'];
        $nilai24    =$_POST['nilai24'];
        $namab1    =$_POST['namab1'];
        $namab2    =$_POST['namab2'];
        $namab3    =$_POST['namab3'];
        $namab4    =$_POST['namab4'];
        $namab5    =$_POST['namab5'];
        $namab6    =$_POST['namab6'];
        $nilaib1    =$_POST['nilaib1'];
        $nilaib2    =$_POST['nilaib2'];
        $nilaib3    =$_POST['nilaib3'];
        $nilaib4    =$_POST['nilaib4'];
        $nilaib5    =$_POST['nilaib5'];
        $nilaib6    =$_POST['nilaib6'];
        $nilaib7    =$_POST['nilaib7'];
        $nilaib8    =$_POST['nilaib8'];
        $nilaib9    =$_POST['nilaib9'];
        $nilaib10    =$_POST['nilaib10'];
        $nilaib11    =$_POST['nilaib11'];
        $nilaib12    =$_POST['nilaib12'];
        $nilaib13    =$_POST['nilaib13'];
        $nilaib14    =$_POST['nilaib14'];
        $nilaib15    =$_POST['nilaib15'];
        $nilaib16    =$_POST['nilaib16'];
        $nilaib17    =$_POST['nilaib17'];
        $nilaib18    =$_POST['nilaib18'];
        $nilaib19    =$_POST['nilaib19'];
        $nilaib20    =$_POST['nilaib20'];
        $nilaib21    =$_POST['nilaib21'];
        $nilaib22    =$_POST['nilaib22'];
        $nilaib23    =$_POST['nilaib23'];
        $nilaib24    =$_POST['nilaib24'];
        $nilaib25    =$_POST['nilaib25'];
        $nilaib26    =$_POST['nilaib26'];
        $nilaib27    =$_POST['nilaib27'];
        $nilaib28    =$_POST['nilaib28'];
        $nilaib29    =$_POST['nilaib29'];
        $nilaib30    =$_POST['nilaib30'];
        $nilaib31    =$_POST['nilaib31'];
        $nilaib32    =$_POST['nilaib32'];
        $nilaib33    =$_POST['nilaib33'];
        $nilaib34    =$_POST['nilaib34'];
        $nilaib35    =$_POST['nilaib35'];
        $nilaib36    =$_POST['nilaib36'];
        $cost1    =$_POST['cost1'];
        $cost2    =$_POST['cost2'];
        $cost3    =$_POST['cost3'];
        $cost4    =$_POST['cost4'];
        $cost5    =$_POST['cost5'];
        $cost6    =$_POST['cost6'];
       

        
        
        
        //pembagi
        $p1 = $nilaib1+$nilaib4+$nilaib7+$nilaib10+$nilaib25+$nilaib31;
        $p2 = $nilaib2+$nilaib5+$nilaib8+$nilaib11+$nilaib26+$nilaib32;
        $p3 = $nilaib3+$nilaib6+$nilaib9+$nilaib12+$nilaib27+$nilaib33;
        $p4 = $nilaib13+$nilaib15+$nilaib17+$nilaib19+$nilaib28+$nilaib34;
        $p5 = $nilaib14+$nilaib16+$nilaib18+$nilaib20+$nilaib29+$nilaib35;
        $p6 = $nilaib21+$nilaib22+$nilaib23+$nilaib24+$nilaib30+$nilaib36;
        //baris1
        $n1 = $nilaib1/$p1;
        $n2 = $nilaib4/$p1;
        $n3 = $nilaib7/$p1;
        $n4 = $nilaib10/$p1;
        $nl16 = $nilaib25/$p1;
        $nl17 = $nilaib31/$p1;
        //baris2
        $n5 = $nilaib2/$p2;
        $n6 = $nilaib5/$p2;
        $n7 = $nilaib8/$p2;
        $n8 = $nilaib11/$p2;
        $nl18 = $nilaib26/$p2;
        $nl19 = $nilaib32/$p2;
        //baris3
        $n9 = $nilaib3/$p3;
        $nl1 = $nilaib6/$p3;
        $nl2 = $nilaib9/$p3;
        $nl3 = $nilaib12/$p3;
        $nl20 = $nilaib27/$p3;
        $nl21 = $nilaib33/$p3;
        //baris4
        $nl4 = $nilaib13/$p4;
        $nl5 = $nilaib15/$p4;
        $nl6 = $nilaib17/$p4;
        $nl7 = $nilaib19/$p4;
        $nl22 = $nilaib28/$p4;
        $nl23 = $nilaib34/$p4;
        //baris5
        $nl8 = $nilaib14/$p5;
        $nl9 = $nilaib16/$p5;
        $nl10 = $nilaib18/$p5;
        $nl11 = $nilaib20/$p5;
        $nl24 = $nilaib29/$p5;
        $nl25 = $nilaib35/$p5;
        //baris6
        $nl12 = $nilaib21/$p6;
        $nl13 = $nilaib22/$p6;
        $nl14 = $nilaib23/$p6;
        $nl15 = $nilaib24/$p6;
        $nl26 = $nilaib30/$p6;
        $nl27 = $nilaib36/$p6;

        //hasil bobot
        $h1 = $n1+$n5+$n9+$nl4+$nl8+$nl12;
        $h2 = $n2+$n6+$nl1+$nl5+$nl9+$nl13;
        $h3 = $n3+$n7+$nl2+$nl6+$nl10+$nl14;
        $h4 = $n4+$n8+$nl3+$nl7+$nl11+$nl15;
        $h5 = $nl16+$nl18+$nl20+$nl22+$nl24+$nl26;
        $h6 = $nl17+$nl19+$nl21+$nl23+$nl25+$nl27;

        //hasil bobot2
        $hl1 = $h1/6;
        $hl2 = $h2/6;
        $hl3 = $h3/6;
        $hl4 = $h4/6;
        $hl5 = $h5/6;
        $hl6 = $h6/6;

        //nilai kasih bobot
        $nb1 = ($n1*$hl1)+($n5*$hl2)+($n9*$hl3)+($nl4*$hl4)+($nl8*$hl5)+($nl12*$hl6);
        $nb2 = ($n2*$hl1)+($n6*$hl2)+($nl1*$hl3)+($nl5*$hl4)+($nl9*$hl5)+($nl13*$hl6);
        $nb3 = ($n3*$hl1)+($n7*$hl2)+($nl2*$hl3)+($nl6*$hl4)+($nl10*$hl5)+($nl14*$hl6);
        $nb4 = ($n4*$hl1)+($n8*$hl2)+($nl3*$hl3)+($nl7*$hl4)+($nl11*$hl5)+($nl15*$hl6);
        $nb5 = ($nl16*$hl1)+($nl18*$hl2)+($nl18*$hl3)+($nl20*$hl4)+($nl22*$hl5)+($nl24*$hl6);
        $nb6 = ($nl17*$hl1)+($nl19*$hl2)+($nl19*$hl3)+($nl21*$hl4)+($nl23*$hl5)+($nl25*$hl6);

        //t
        $t =(($nb1/$hl1)+($nb2/$hl2)+($nb3/$hl3)+($nb4/$hl4)+($nb5/$hl5)+($nb6/$hl6))/6;
        $ci = ($t/6)-(6-1);
        $k = $t/$ci;

        //faktor1
        //line1
        $a1 = $nilai1/$nilai1; 
        $a2 = $nilai4/$nilai1; 
        $a3 = $nilai7/$nilai1; 
        $a4 = $nilai10/$nilai1; 
        //line2
        $ab1 = $nilai1/$nilai4; 
        $ab2 = $nilai4/$nilai4; 
        $ab3 = $nilai7/$nilai4; 
        $ab4 = $nilai10/$nilai4;
        //line3
        $ac1 = $nilai1/$nilai7; 
        $ac2 = $nilai4/$nilai7; 
        $ac3 = $nilai7/$nilai7; 
        $ac4 = $nilai10/$nilai7;
        //line4
        $ad1 = $nilai1/$nilai10; 
        $ad2 = $nilai4/$nilai10; 
        $ad3 = $nilai7/$nilai10; 
        $ad4 = $nilai10/$nilai10;
        //sum 
        $f1 = $a1+$a2+$a3+$a4; 
        $f2 = $ab1+$ab2+$ab3+$ab4;  
        $f3 = $ac1+$ac2+$ac3+$ac4;    
        $f4 = $ad1+$ad2+$ad3+$ad4;
        //bagi
        //line1
        $g1=$a1/$f1;
        $g2=$a2/$f1;
        $g3=$a3/$f1;
        $g4=$a4/$f1;
         //line1
        $gb1=$ab1/$f2;
        $gb2=$ab2/$f2;
        $gb3=$ab3/$f2;
        $gb4=$ab4/$f2;
          //line1
        $gc1=$ac1/$f3;
        $gc2=$ac2/$f3;
        $gc3=$ac3/$f3;
        $gc4=$ac4/$f3;
          //line1
        $gd1=$ad1/$f4;
        $gd2=$ad2/$f4;
        $gd3=$ad3/$f4;
        $gd4=$ad4/$f4;
        //sum2
        $i=$g1+$gb1+$gc1+$gd1;
        $i2=$g2+$gb2+$gc3+$gd2;
        $i3=$g3+$gb3+$gc3+$gd3;
        $i4=$g4+$gb4+$gc4+$gd4;

        $l1=$i/4;
        $l2=$i2/4;
        $l3=$i3/4;
        $l4=$i4/4;

        $min1=array($g1,$gb2,$gc1,$gd1);
        //atau bagi
        $m1=min($min1)/$l1;
        $m2=min($min1)/$l2;
        $m3=min($min1)/$l3;
        $m4=min($min1)/$l4;
       
        //jml1
        $r1=($m1+$m2+$m3+$m4);

        $b1=$m1/$r1;
        $b2=$m2/$r1;
        $b3=$m3/$r1;
        $b4=$m4/$r1;
        


        //faktor2
        //line1
        $a21 = $nilai2/$nilai2; 
        $a22 = $nilai5/$nilai2; 
        $a23 = $nilai8/$nilai2; 
        $a24 = $nilai11/$nilai2; 
        //line2
        $a2b1 = $nilai2/$nilai5; 
        $a2b2 = $nilai5/$nilai5; 
        $a2b3 = $nilai8/$nilai5; 
        $a2b4 = $nilai11/$nilai5;
        //line3
        $a2c1 = $nilai2/$nilai8; 
        $a2c2 = $nilai5/$nilai8; 
        $a2c3 = $nilai8/$nilai8; 
        $a2c4 = $nilai11/$nilai8;
        //line4
        $a2d1 = $nilai2/$nilai11; 
        $a2d2 = $nilai5/$nilai11; 
        $a2d3 = $nilai8/$nilai11; 
        $a2d4 = $nilai11/$nilai11;
        //sum 
        $f21 = $a21+$a22+$a23+$a24; 
        $f22 = $a2b1+$a2b2+$a2b3+$a2b4;  
        $f23 = $a2c1+$a2c2+$a2c3+$a2c4;    
        $f24 = $a2d1+$a2d2+$a2d3+$a2d4;
        //bagi
        //line1
        $g21=$a21/$f21;
        $g22=$a22/$f21;
        $g23=$a23/$f21;
        $g24=$a24/$f21;
         //line1
        $g2b1=$a2b1/$f22;
        $g2b2=$a2b2/$f22;
        $g2b3=$a2b3/$f22;
        $g2b4=$a2b4/$f22;
          //line1
        $g2c1=$a2c1/$f23;
        $g2c2=$a2c2/$f23;
        $g2c3=$a2c3/$f23;
        $g2c4=$a2c4/$f23;
          //line1
        $g2d1=$a2d1/$f24;
        $g2d2=$a2d2/$f24;
        $g2d3=$a2d3/$f24;
        $g2d4=$a2d4/$f24;
        //sum2
        $i21=$g21+$g2b1+$g2c1+$g2d1;
        $i22=$g22+$g2b2+$g2c3+$g2d2;
        $i23=$g23+$g2b3+$g2c3+$g2d3;
        $i24=$g24+$g2b4+$g2c4+$g2d4;

        $l21=$i21/4;
        $l22=$i22/4;
        $l23=$i23/4;
        $l24=$i24/4;

        $min21=array($g21,$g2b2,$g2c1,$g2d1);
        //atau bagi
        $m21=max($min21)/$l21;
        $m22=max($min21)/$l22;
        $m23=max($min21)/$l23;
        $m24=max($min21)/$l24;
       
        //jml1
        $r2=($m21+$m22+$m23+$m24);

        $b21=$m21/$r2;
        $b22=$m22/$r2;
        $b23=$m23/$r2;
        $b24=$m24/$r2;


         //faktor3
        //line1
        $a31 = $nilai3/$nilai3; 
        $a32 = $nilai6/$nilai3; 
        $a33 = $nilai9/$nilai3; 
        $a34 = $nilai12/$nilai3; 
        //line2
        $a3b1 = $nilai3/$nilai6; 
        $a3b2 = $nilai6/$nilai6; 
        $a3b3 = $nilai9/$nilai6; 
        $a3b4 = $nilai12/$nilai6;
        //line3
        $a3c1 = $nilai3/$nilai9; 
        $a3c2 = $nilai6/$nilai9; 
        $a3c3 = $nilai9/$nilai9; 
        $a3c4 = $nilai12/$nilai9;
        //line4
        $a3d1 = $nilai3/$nilai12; 
        $a3d2 = $nilai6/$nilai12; 
        $a3d3 = $nilai9/$nilai12; 
        $a3d4 = $nilai12/$nilai12;
        //sum 
        $f31 = $a31+$a32+$a33+$a34; 
        $f32 = $a3b1+$a3b2+$a3b3+$a3b4;  
        $f33 = $a3c1+$a3c2+$a3c3+$a3c4;    
        $f34 = $a3d1+$a3d2+$a3d3+$a3d4;
        //bagi
        //line1
        $g31=$a31/$f31;
        $g32=$a32/$f31;
        $g33=$a33/$f31;
        $g34=$a34/$f31;
         //line1
        $g3b1=$a3b1/$f32;
        $g3b2=$a3b2/$f32;
        $g3b3=$a3b3/$f32;
        $g3b4=$a3b4/$f32;
          //line1
        $g3c1=$a3c1/$f33;
        $g3c2=$a3c2/$f33;
        $g3c3=$a3c3/$f33;
        $g3c4=$a3c4/$f33;
          //line1
        $g3d1=$a3d1/$f34;
        $g3d2=$a3d2/$f34;
        $g3d3=$a3d3/$f34;
        $g3d4=$a3d4/$f34;
        //sum2
        $i31=$g31+$g3b1+$g3c1+$g3d1;
        $i32=$g32+$g3b2+$g3c3+$g3d2;
        $i33=$g33+$g3b3+$g3c3+$g3d3;
        $i34=$g34+$g3b4+$g3c4+$g3d4;

        $l31=$i31/4;
        $l32=$i32/4;
        $l33=$i33/4;
        $l34=$i34/4;

        $min31=array($g31,$g3b2,$g3c1,$g3d1);
        //atau bagi
        $m31=max($min31)/$l31;
        $m32=max($min31)/$l32;
        $m33=max($min31)/$l33;
        $m34=max($min31)/$l34;
       
        //jml1
        $r3=($m31+$m32+$m33+$m34);

        $b31=$m31/$r3;
        $b32=$m32/$r3;
        $b33=$m33/$r3;
        $b34=$m34/$r3;


        //faktor4
        //line1
        $a41 = $nilai13/$nilai13; 
        $a42 = $nilai15/$nilai13; 
        $a43 = $nilai17/$nilai13; 
        $a44 = $nilai19/$nilai13; 
        //line2
        $a4b1 = $nilai13/$nilai15; 
        $a4b2 = $nilai15/$nilai15; 
        $a4b3 = $nilai17/$nilai15; 
        $a4b4 = $nilai19/$nilai15;
        //line3
        $a4c1 = $nilai13/$nilai17; 
        $a4c2 = $nilai15/$nilai17; 
        $a4c3 = $nilai17/$nilai17; 
        $a4c4 = $nilai19/$nilai17;
        //line4
        $a4d1 = $nilai13/$nilai19; 
        $a4d2 = $nilai15/$nilai19; 
        $a4d3 = $nilai17/$nilai19; 
        $a4d4 = $nilai19/$nilai19;
        //sum 
        $f41 = $a41+$a42+$a43+$a44; 
        $f42 = $a4b1+$a4b2+$a4b3+$a4b4;  
        $f43 = $a4c1+$a4c2+$a4c3+$a4c4;    
        $f44 = $a4d1+$a4d2+$a4d3+$a4d4;
        //bagi
        //line1
        $g41=$a41/$f41;
        $g42=$a42/$f41;
        $g43=$a43/$f41;
        $g44=$a44/$f41;
         //line1
        $g4b1=$a4b1/$f42;
        $g4b2=$a4b2/$f42;
        $g4b3=$a4b3/$f42;
        $g4b4=$a4b4/$f42;
          //line1
        $g4c1=$a4c1/$f43;
        $g4c2=$a4c2/$f43;
        $g4c3=$a4c3/$f43;
        $g4c4=$a4c4/$f43;
          //line1
        $g4d1=$a4d1/$f44;
        $g4d2=$a4d2/$f44;
        $g4d3=$a4d3/$f44;
        $g4d4=$a4d4/$f44;
        //sum2
        $i41=$g41+$g4b1+$g4c1+$g4d1;
        $i42=$g42+$g4b2+$g4c3+$g4d2;
        $i43=$g43+$g4b3+$g4c3+$g4d3;
        $i44=$g44+$g4b4+$g4c4+$g4d4;

        $l41=$i41/4;
        $l42=$i42/4;
        $l43=$i43/4;
        $l44=$i44/4;

        $min41=array($g41,$g4b2,$g4c1,$g4d1);
        //atau bagi
        $m41=max($min41)/$l31;
        $m42=max($min41)/$l32;
        $m43=max($min41)/$l33;
        $m44=max($min41)/$l34;
       
        //jml1
        $r4=($m41+$m42+$m43+$m44);

        $b41=$m41/$r4;
        $b42=$m42/$r4;
        $b43=$m43/$r4;
        $b44=$m44/$r4;


        //faktor5
        //line1
        $a51 = $nilai14/$nilai14; 
        $a52 = $nilai16/$nilai14; 
        $a53 = $nilai18/$nilai14; 
        $a54 = $nilai20/$nilai14; 
        //line2
        $a5b1 = $nilai14/$nilai16; 
        $a5b2 = $nilai16/$nilai16; 
        $a5b3 = $nilai18/$nilai16; 
        $a5b4 = $nilai20/$nilai16;
        //line3
        $a5c1 = $nilai14/$nilai18; 
        $a5c2 = $nilai16/$nilai18; 
        $a5c3 = $nilai18/$nilai18; 
        $a5c4 = $nilai20/$nilai18;
        //line4
        $a5d1 = $nilai14/$nilai20; 
        $a5d2 = $nilai16/$nilai20; 
        $a5d3 = $nilai18/$nilai20; 
        $a5d4 = $nilai20/$nilai20;
        //sum 
        $f51 = $a51+$a52+$a53+$a54; 
        $f52 = $a5b1+$a5b2+$a5b3+$a5b4;  
        $f53 = $a5c1+$a5c2+$a5c3+$a5c4;    
        $f54 = $a5d1+$a5d2+$a5d3+$a5d4;
        //bagi
        //line1
        $g51=$a51/$f51;
        $g52=$a52/$f51;
        $g53=$a53/$f51;
        $g54=$a54/$f51;
         //line1
        $g5b1=$a5b1/$f52;
        $g5b2=$a5b2/$f52;
        $g5b3=$a5b3/$f52;
        $g5b4=$a5b4/$f52;
          //line1
        $g5c1=$a5c1/$f53;
        $g5c2=$a5c2/$f53;
        $g5c3=$a5c3/$f53;
        $g5c4=$a5c4/$f53;
          //line1
        $g5d1=$a5d1/$f54;
        $g5d2=$a5d2/$f54;
        $g5d3=$a5d3/$f54;
        $g5d4=$a5d4/$f54;
        //sum2
        $i51=$g51+$g5b1+$g5c1+$g5d1;
        $i52=$g52+$g5b2+$g5c3+$g5d2;
        $i53=$g53+$g5b3+$g5c3+$g5d3;
        $i54=$g54+$g5b4+$g5c4+$g5d4;

        $l51=$i41/4;
        $l52=$i42/4;
        $l53=$i43/4;
        $l54=$i44/4;

        $min51=array($g51,$g5b2,$g5c1,$g5d1);
        //atau bagi
        $m51=max($min51)/$l51;
        $m52=max($min51)/$l52;
        $m53=max($min51)/$l53;
        $m54=max($min51)/$l54;
       
        //jml1
        $r5=($m51+$m52+$m53+$m54);

        $b51=$m51/$r5;
        $b52=$m52/$r5;
        $b53=$m53/$r5;
        $b54=$m54/$r5;


        //faktor6
        //line1
        $a61 = $nilai21/$nilai21; 
        $a62 = $nilai22/$nilai21; 
        $a63 = $nilai23/$nilai21; 
        $a64 = $nilai24/$nilai21; 
        //line2
        $a6b1 = $nilai21/$nilai22; 
        $a6b2 = $nilai22/$nilai22; 
        $a6b3 = $nilai23/$nilai22; 
        $a6b4 = $nilai24/$nilai22;
        //line3

        $a6c1 = $nilai21/$nilai23; 
        $a6c2 = $nilai22/$nilai23; 
        $a6c3 = $nilai23/$nilai23; 
        $a6c4 = $nilai24/$nilai23;
        //line4
        $a6d1 = $nilai21/$nilai24; 
        $a6d2 = $nilai22/$nilai24; 
        $a6d3 = $nilai23/$nilai24; 
        $a6d4 = $nilai24/$nilai24;
        //sum 
        $f61 = $a61+$a62+$a63+$a64; 
        $f62 = $a6b1+$a6b2+$a6b3+$a6b4;  
        $f63 = $a6c1+$a6c2+$a6c3+$a6c4;    
        $f64 = $a6d1+$a6d2+$a6d3+$a6d4;
        //bagi
        //line1
        $g61=$a61/$f61;
        $g62=$a62/$f61;
        $g63=$a63/$f61;
        $g64=$a64/$f61;
         //line1
        $g6b1=$a6b1/$f62;
        $g6b2=$a6b2/$f62;
        $g6b3=$a6b3/$f62;
        $g6b4=$a6b4/$f62;
          //line1
        $g6c1=$a6c1/$f63;
        $g6c2=$a6c2/$f63;
        $g6c3=$a6c3/$f63;
        $g6c4=$a6c4/$f63;
          //line1
        $g6d1=$a6d1/$f64;
        $g6d2=$a6d2/$f64;
        $g6d3=$a6d3/$f64;
        $g6d4=$a6d4/$f64;
        //sum2
        $i61=$g61+$g6b1+$g6c1+$g6d1;
        $i62=$g62+$g6b2+$g6c3+$g6d2;
        $i63=$g63+$g6b3+$g6c3+$g6d3;
        $i64=$g64+$g6b4+$g6c4+$g6d4;

        $l61=$i61/4;
        $l62=$i62/4;
        $l63=$i63/4;
        $l64=$i64/4;

        $min61=array($g61,$g6b2,$g6c1,$g6d1);
        //atau bagi
        $m61=max($min61)/$l61;
        $m62=max($min61)/$l62;
        $m63=max($min61)/$l63;
        $m64=max($min61)/$l64;
    
        //jml1
        $r6=($m61+$m62+$m63+$m64);

        $b61=$m61/$r6;
        $b62=$m62/$r6;
        $b63=$m63/$r6;
        $b64=$m64/$r6;

        

         
        $sum      =($m1*$nb1)+($m21*$nb2)+($m31*$nb3)+($m41*$nb4)+($m51*$nb5)+($m61*$nb6);
        $sum1     =($m2*$nb1)+($m22*$nb2)+($m32*$nb3)+($m42*$nb4)+($m52*$nb5)+($m62*$nb6);
        $sum2     =($m3*$nb1)+($m23*$nb2)+($m33*$nb3)+($m43*$nb4)+($m53*$nb5)+($m63*$nb6);
        $sum3     =($m4*$nb1)+($m24*$nb2)+($m34*$nb3)+($m44*$nb4)+($m54*$nb5)+($m64*$nb6);
        $all=array($sum,$sum1,$sum2,$sum3);
       
        echo "
                 
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
                   	<td align='right'>";echo number_format($nilai1,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai2,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai3,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai13,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai14,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai21,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($sum,15,',','.');echo "</td>
                </tr>
                <tr>    
                    <td>$nama2</td>
                   	<td align='right'>";echo number_format($nilai4,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai5,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai6,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai15,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai16,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai22,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($sum1,15,',','.');echo "</td>
                </tr>
                <tr>    
                    <td>$nama3</td>
                   	<td align='right'>";echo number_format($nilai7,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai8,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai9,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai17,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai18,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai23,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($sum2,15,',','.');echo "</td>
                </tr>
                <tr>    
                    <td>$nama4</td>
                   	<td align='right'>";echo number_format($nilai10,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai11,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai12,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai19,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai20,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($nilai24,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($sum3,15,',','.');echo "</td>
                </tr>
                
                 <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>pembagi</th>
                        <td align='right'>";echo number_format($p1,2,',','.');echo "</td>
                        <td align='right'>";echo number_format($p2,2,',','.');echo "</td>
                        <td align='right'>";echo number_format($p3,2,',','.');echo "</td>
                        <td align='right'>";echo number_format($p4,2,',','.');echo "</td>
                        <td align='right'>";echo number_format($p5,2,',','.');echo "</td>
                        <td align='right'>";echo number_format($p6,2,',','.');echo "</td>
                    </tr>
                    </tr>
                </table>
                <h3 align=center>Ternormalisasi :</h3>
                <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                    <tr>
                    <td>$namab1</td>
                        <td align='right'>";echo number_format($n1,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($n2,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($n3,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($n4,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl16,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl17,5,',','.');echo "</td>  
                    </tr>
                     <tr>
                     <td>$namab2</td>
                        <td align='right'>";echo number_format($n5,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($n6,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($n7,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($n8,5,',','.');echo "</td>
                         <td align='right'>";echo number_format($nl18,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl19,5,',','.');echo "</td>  
                    </tr>
                      <tr>
                      <td>$namab3</td>
                        <td align='right'>";echo number_format($n9,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl1,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl2,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl3,5,',','.');echo "</td>
                         <td align='right'>";echo number_format($nl20,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl21,5,',','.');echo "</td>  
                    </tr>
                     <tr>
                     <td>$namab4</td>
                        <td align='right'>";echo number_format($nl4,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl5,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl6,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl7,5,',','.');echo "</td>
                         <td align='right'>";echo number_format($nl22,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl23,5,',','.');echo "</td>  
                    </tr>
                    <tr>
                    <td>$namab5</td>
                        <td align='right'>";echo number_format($nl8,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl9,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl10,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl11,5,',','.');echo "</td>
                         <td align='right'>";echo number_format($nl24,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl25,5,',','.');echo "</td>  
                    </tr>
                     <tr>
                     <td>$namab6</td>
                        <td align='right'>";echo number_format($nl12,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl13,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl14,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl15,5,',','.');echo "</td>
                         <td align='right'>";echo number_format($nl26,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nl27,5,',','.');echo "</td>  
                    </tr>
                    </tr>
                </table>
                    <h3 align=center>hasil normalisasi 1 :</h3>
                     <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                    <tr>

                        <td align='right'>";echo number_format($h1,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($h2,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($h3,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($h4,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($h5,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($h6,5,',','.');echo "</td>  
                    </tr>
                    </table>
                    <h3 align=center>hasil normalisasi di bagi 6 :</h3>
                     <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                    <tr>
                        <td align='right'>";echo number_format($hl1,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($hl2,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($hl3,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($hl4,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($hl5,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($hl6,5,',','.');echo "</td>  
                    </tr>
                    </table>
                      <h3 align=center>hasil normalisasi dikali niali konsisten:</h3>
                     <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                    <tr>
                        <td align='right'>";echo number_format($nb1,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nb2,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nb3,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nb4,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nb5,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($nb6,5,',','.');echo "</td>  
                    </tr>
                    </table>
                     <h3 align=center>nilai t:</h3>
                     <table  cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                    <tr>
                        <td align='right'>";echo number_format($t,5,',','.');echo "</td>   
                    </tr>
                    </table>
                    </table>
                     <h3 align=center>nilai CI:</h3>
                     <table  cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                    <tr>
                        <td align='right'>";echo number_format($ci,5,',','.');echo "</td>   
                    </tr>
                    </table>
                     </table>
                     <h3 align=center>nilai konsisten:</h3>
                     <table  cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                    <tr>
                        <td align='right'>";echo number_format($k,5,',','.');echo "</td>
                         <th bgcolor='blue'>==</th>
                        <td align='right'>";echo number_format($k,1,',','.');echo "</td>    
                    </tr>
                    </table>
                    <h3 align=center>Antara Cost dan Benefit Perbedaannya dalam Mencari Nilai Matriks ini, Jika Cost Pembagiannya Terbalik :</h3>
                    <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='blue'>$faktor1</th>
                            </tr>
                            <tr>
                            
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                               
                                <td align='right'>";echo number_format($a1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               
                                <td align='right'>";echo number_format($ab1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($ab2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($ab3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($ab4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($ac1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($ac2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($ac3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($ac4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($ad1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($ad2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($ad3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($ad4,5,',','.');echo "</td>
                            </tr>
                           
                    </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>pembagi</th>
                        <td align='right'>";echo number_format($f1,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f2,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f3,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f4,5,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                 <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='yellow'>hasil bagi</th>
                            </tr>
                            <tr>
                            
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                                
                                <td align='right'>";echo number_format($g1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($gb1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($gb2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($gb3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($gb4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($gc1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($gc2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($gc3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($gc4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               
                                <td align='right'>";echo number_format($gd1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($gd2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($gd3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($gd4,5,',','.');echo "</td>
                            </tr>
                           
                    </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>hasil</th>
                        <td align='right'>";echo number_format($l1,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l2,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l3,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l4,6,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                        <tr>
                         <th colspan='5' bgcolor='yellow'>atau</th>
                         </tr>
                     <tr>
                        <tr>
                       
                        <td align='right'>";echo number_format($m1,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m2,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m3,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m4,6,',','.');echo "</td>
                        
                    </tr>
                         <tr>
                        
                        <td align='right'>";echo number_format($b1,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b2,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b3,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b4,6,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                <h3 align=center>tabel 2 :</h3>

                <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='blue'>$faktor2</th>
                            </tr>
                            <tr>
                            
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                               
                                <td align='right'>";echo number_format($a21,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a22,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a23,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a24,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               
                                <td align='right'>";echo number_format($a2b1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a2b2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a2b3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a2b4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($a2c1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a2c2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a2c3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a2c4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($a2d1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a2d2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a2d3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a2d4,5,',','.');echo "</td>
                            </tr>
                           
                    </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>pembagi</th>
                        <td align='right'>";echo number_format($f21,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f22,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f23,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f24,5,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                 <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='yellow'>hasil bagi</th>
                            </tr>
                            <tr>
                            
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                                
                                <td align='right'>";echo number_format($g21,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g22,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g23,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g24,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($g2b1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g2b2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g2b3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g2b4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($g2c1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g2c2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g2c3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g2c4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               
                                <td align='right'>";echo number_format($g2d1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g2d2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g2d3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g2d4,5,',','.');echo "</td>
                            </tr>
                           
                    </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>hasil</th>
                        <td align='right'>";echo number_format($l21,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l22,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l23,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l24,6,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                        <tr>
                         <th colspan='5' bgcolor='yellow'>atau</th>
                         </tr>
                     <tr>
                        <tr>
                       
                        <td align='right'>";echo number_format($m21,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m22,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m23,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m24,6,',','.');echo "</td>
                        
                    </tr>
                         <tr>
                        
                        <td align='right'>";echo number_format($b21,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b22,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b23,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b24,6,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                 <h3 align=center>tabel 3 :</h3>

                <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='blue'>$faktor3</th>
                            </tr>
                            <tr>
                            
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                               
                                <td align='right'>";echo number_format($a31,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a32,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a33,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a34,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               
                                <td align='right'>";echo number_format($a3b1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a3b2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a3b3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a3b4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($a3c1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a3c2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a3c3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a3c4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($a3d1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a3d2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a3d3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a3d4,5,',','.');echo "</td>
                            </tr>
                           
                    </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>pembagi</th>
                        <td align='right'>";echo number_format($f31,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f32,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f33,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f34,5,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                 <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='yellow'>hasil bagi</th>
                            </tr>
                            <tr>
                            
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                                
                                <td align='right'>";echo number_format($g31,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g32,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g33,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g34,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($g3b1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g3b2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g3b3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g3b4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($g3c1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g3c2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g3c3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g3c4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               
                                <td align='right'>";echo number_format($g3d1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g3d2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g3d3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g3d4,5,',','.');echo "</td>
                            </tr>
                           
                    </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>hasil</th>
                        <td align='right'>";echo number_format($l31,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l32,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l33,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l34,6,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                        <tr>
                         <th colspan='5' bgcolor='yellow'>atau</th>
                         </tr>
                     <tr>
                        <tr>
                       
                        <td align='right'>";echo number_format($m31,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m32,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m33,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m34,6,',','.');echo "</td>
                        
                    </tr>
                         <tr>
                        
                        <td align='right'>";echo number_format($b31,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b32,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b33,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b34,6,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>

                <h3 align=center>tabel 4 :</h3>

                <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='blue'>$faktor4</th>
                            </tr>
                            <tr>
                            
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                               
                                <td align='right'>";echo number_format($a41,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a42,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a43,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a44,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               
                                <td align='right'>";echo number_format($a4b1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a4b2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a4b3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a4b4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($a4c1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a4c2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a4c3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a4c4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($a4d1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a4d2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a4d3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a4d4,5,',','.');echo "</td>
                            </tr>
                           
                    </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>pembagi</th>
                        <td align='right'>";echo number_format($f41,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f42,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f43,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f44,5,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                 <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='yellow'>hasil bagi</th>
                            </tr>
                            <tr>
                            
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                                
                                <td align='right'>";echo number_format($g41,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g42,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g43,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g44,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($g4b1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g4b2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g4b3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g4b4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($g4c1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g4c2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g4c3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g4c4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               
                                <td align='right'>";echo number_format($g4d1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g4d2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g4d3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g4d4,5,',','.');echo "</td>
                            </tr>
                           
                    </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>hasil</th>
                        <td align='right'>";echo number_format($l41,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l42,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l43,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l44,6,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                        <tr>
                         <th colspan='5' bgcolor='yellow'>atau</th>
                         </tr>
                     <tr>
                        <tr>
                       
                        <td align='right'>";echo number_format($m41,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m42,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m43,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m44,6,',','.');echo "</td>
                        
                    </tr>
                         <tr>
                        
                        <td align='right'>";echo number_format($b41,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b42,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b43,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b44,6,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                <h3 align=center>tabel 5 :</h3>

                <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='blue'>$faktor5</th>
                            </tr>
                            <tr>
                            
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                               
                                <td align='right'>";echo number_format($a51,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a52,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a53,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a54,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               
                                <td align='right'>";echo number_format($a5b1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a5b2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a5b3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a5b4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($a5c1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a5c2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a5c3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a5c4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($a5d1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a5d2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a5d3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a5d4,5,',','.');echo "</td>
                            </tr>
                           
                    </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>pembagi</th>
                        <td align='right'>";echo number_format($f51,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f52,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f53,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f54,5,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                 <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='yellow'>hasil bagi</th>
                            </tr>
                            <tr>
                            
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                                
                                <td align='right'>";echo number_format($g51,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g52,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g53,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g54,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($g5b1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g5b2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g5b3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g5b4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($g5c1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g5c2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g5c3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g5c4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               
                                <td align='right'>";echo number_format($g5d1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g5d2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g5d3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g5d4,5,',','.');echo "</td>
                            </tr>
                           
                    </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>hasil</th>
                        <td align='right'>";echo number_format($l51,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l52,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l53,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l54,6,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                        <tr>
                         <th colspan='5' bgcolor='yellow'>atau</th>
                         </tr>
                     <tr>
                        <tr>
                       
                        <td align='right'>";echo number_format($m51,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m52,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m53,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m54,6,',','.');echo "</td>
                        
                    </tr>
                         <tr>
                        
                        <td align='right'>";echo number_format($b51,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b52,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b53,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b54,6,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>

                <h3 align=center>tabel 6 :</h3>

                <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='blue'>$faktor6</th>
                            </tr>
                            <tr>
                            
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                               
                                <td align='right'>";echo number_format($a61,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a62,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a63,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a64,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               
                                <td align='right'>";echo number_format($a6b1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a6b2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a6b3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a6b4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($a6c1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a6c2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a6c3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a6c4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($a6d1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a6d2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a6d3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($a6d4,5,',','.');echo "</td>
                            </tr>
                           
                    </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>pembagi</th>
                        <td align='right'>";echo number_format($f61,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f62,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f63,5,',','.');echo "</td>
                        <td align='right'>";echo number_format($f64,5,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>

                 <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='yellow'>hasil bagi</th>
                            </tr>
                            <tr>
                            
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                                
                                <td align='right'>";echo number_format($g61,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g62,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g63,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g64,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($g6b1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g6b2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g6b3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g6b4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                
                                <td align='right'>";echo number_format($g6c1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g6c2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g6c3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g6c4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               
                                <td align='right'>";echo number_format($g6d1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g6d2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g6d3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($g6d4,5,',','.');echo "</td>
                            </tr>
                           
                    </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                     <tr>
                        <tr>
                        <th bgcolor='yellow'>hasil</th>
                        <td align='right'>";echo number_format($l61,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l62,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l63,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($l64,6,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                </table>
                    <table border='1' cellpadding=3 cellspacing=3
                        align=center>
                        <tr>
                         <th colspan='5' bgcolor='yellow'>atau</th>
                         </tr>
                     <tr>
                        <tr>
                       
                        <td align='right'>";echo number_format($m61,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m62,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m63,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($m64,6,',','.');echo "</td>
                        
                    </tr>
                         <tr>
                        
                        <td align='right'>";echo number_format($b61,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b62,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b63,6,',','.');echo "</td>
                        <td align='right'>";echo number_format($b64,6,',','.');echo "</td>
                        
                    </tr>
                    </tr>
                </table>
                <h3 align=center> hasil perangkaian :</h3>
                 <table border='1'cellpadding=3 cellspacing=3
                             align=center>
                            <tr>
                                <th colspan='5' bgcolor='yellow'>perangkaian</th>
                            </tr>
                            <tr>
                            <td>      </td>
                            <td>$nama1</td>
                            <td>$nama2</td>
                            <td>$nama3</td>
                            <td>$nama4</td>
                            
                            </tr>
                             <tr>    
                                <td>$faktor1</td>
                                <td align='right'>";echo number_format($m1,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m2,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m3,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m4,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                <td>$faktor2</td>
                                <td align='right'>";echo number_format($m21,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m22,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m23,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m24,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                                <td>$faktor3</td>
                                <td align='right'>";echo number_format($m31,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m32,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m33,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m34,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               <td>$faktor4</td>
                                <td align='right'>";echo number_format($m41,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m42,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m43,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m44,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               <td>$faktor5</td>
                                <td align='right'>";echo number_format($m51,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m52,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m53,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m54,5,',','.');echo "</td>
                            </tr>
                            <tr>    
                               <td>$faktor6</td>
                                <td align='right'>";echo number_format($m61,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m62,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m63,5,',','.');echo "</td>
                                <td align='right'>";echo number_format($m64,5,',','.');echo "</td>
                            </tr>
                </table>

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
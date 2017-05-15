<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Kalkulator Bangun Ruang </title>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
function Checkradiobutton()
{
		if(document.getElementById('r1').checked)
	 {
		document.getElementById('sisiSegitiga').disabled=true;
		document.getElementById('alas').disabled = false;
		document.getElementById('tinggi').disabled = false;
		document.getElementById('button_segitiga').name = "LuasSegitiga";	
		   }else{
		   document.getElementById('alas').disabled = true;
		   document.getElementById('tinggi').disabled = true;
		   document.getElementById('sisiSegitiga').disabled=false;
			document.getElementById('button_segitiga').name = "KelilingSegitiga";
	   }
	 }
	 
function Checkradiobutton1()
{
		if(document.getElementById('r3').checked)
	 {
		document.getElementById('button_persegi').name = "LuasPersegi";	
		   }else{
			document.getElementById('button_persegi').name = "KelPersegi";
	   }
	 }

	 
function Checkradiobutton2()
{
		if(document.getElementById('r5').checked)
	 {
		document.getElementById('button_persegipanjang').name = "LuasPersegiPanjang";	
		   }else{
			document.getElementById('button_persegipanjang').name = "KelPersegiPanjang";
	   }
	 }


	 
function Checkradiobutton3()
{
		if(document.getElementById('r7').checked)
	 {
		document.getElementById('button_lingkaran').name = "LuasLingkaran";	
		   }else{
			document.getElementById('button_lingkaran').name = "KelLingkaran";
	   }
	 }
	 
function Checkradiobutton4()
{
		if(document.getElementById('r9').checked)
	 {
		document.getElementById('dsatu').disabled=false;
		document.getElementById('ddua').disabled = false;
		document.getElementById('sisi3').disabled = true;
		document.getElementById('button_belahketupat').name = "LuasBelahKetupat";	
		   }else{
		   document.getElementById('dsatu').disabled = true;
		   document.getElementById('ddua').disabled = true;
		   document.getElementById('sisi3').disabled=false;
			document.getElementById('button_belahketupat').name = "KelBelahKetupat";
	   }
	 }
	 
function Checkradiobutton5()
{
		if(document.getElementById('r11').checked)
	 {
		document.getElementById('alas2').disabled=false;
		document.getElementById('tinggi2').disabled = false;
		document.getElementById('sisiMiring').disabled = true;
		document.getElementById('button_jajargenjang').name = "LuasJajarGenjang";	
		   }else{
		document.getElementById('alas2').disabled=false;
		document.getElementById('tinggi2').disabled = true;
		document.getElementById('sisiMiring').disabled = false;
			document.getElementById('button_jajargenjang').name = "KelJajarGenjang";
			
	   }
	 }
	 
function Checkradiobutton6()
{
		if(document.getElementById('r13').checked)
	 {
		document.getElementById('dsatu1').disabled=false;
		document.getElementById('ddua1').disabled = false;
		document.getElementById('sisimiring1').disabled = true;
		document.getElementById('sisimiring2').disabled = true;
		document.getElementById('button_layang').name = "LuasLayang";	
		   }else{
		document.getElementById('dsatu1').disabled=true;
		document.getElementById('ddua1').disabled = true;
		document.getElementById('sisimiring1').disabled = false;
		document.getElementById('sisimiring2').disabled = false;
			document.getElementById('button_layang').name = "KelLayang";
	   }
	 }
 </script>
 
  
</head>

<body>

<div align="center">
<div class="container">

<h4><b>Geometry Calculator</b></h4>

<div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
				<button type="button" class="btn btn-info" data-toggle="collapse"  data-parent="#accordion" href="#collapse1">Segitiga</button>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
			<form method="post" action="KalkulatorRD.php" >
				<table>
					<tr><td>Masukkan Alas</td><td>:</td><td><input type="number" value = "0" id="alas" name="alas"  /></td></tr>
					<tr><td>Masukkan Tinggi</td><td>:</td><td><input type="number" value = "0" id="tinggi" name="tinggi"  /></td></tr>
					<tr><td>Masukkan Sisi</td><td>:</td><td><input type="number" value = "0" id="sisiSegitiga" name="sisiSegitiga"  /></td></tr>
					<tr><td colspan='1'> Pilihan :</td></tr>
					<tr><td colspan='2'align="center"><input type="radio" name="rbutton_segitiga" id="r1" value="Hitung Luas" onclick="Checkradiobutton()"/>Hitung Luas</td>
					<td colspan='2'><input type="radio" name="rbutton_segitiga" id="r2" value="keliling" onclick="Checkradiobutton()"/>Hitung Keliling</td></tr>
					<tr><td><input id="button_segitiga" type="submit" name="hasil1" value="Hasil" /></td>
				</table>
			</form>
			</div>
			</div>
		</div>

		
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
				<button type="button" class="btn btn-info" data-toggle="collapse"  data-parent="#accordion" href="#collapse2">Persegi</button>
				</h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">		
				<form method="post" action="KalkulatorRD.php" >
				<table>
					<tr><td>Masukkan Nilai Sisi</td><td>:</td><td><input type="number" name="sisi" required/></td></tr>
					<tr><td colspan='1'> Pilihan :</td></tr>
					<tr><td colspan='2'align="center"><input type="radio" name="rbutton_persegi" id="r3" value="Hitung Luas" onclick="Checkradiobutton1()"/>Hitung Luas</td>
					<td colspan='2'><input type="radio" name="rbutton_persegi" id="r4" value="Hitung Keliling" onclick="Checkradiobutton1()"/>Hitung Keliling</td></tr>
					<tr><td><input id="button_persegi" type="submit" name="hasil2" value="Hasil" /></td>
				</table>
				</form>
			</div>
			</div>
		</div>

		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
				<button type="button" class="btn btn-info" data-toggle="collapse"  data-parent="#accordion" data-target="#collapse3">Persegi Panjang</button>
				</h4>
			</div>
			<div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
				<form method="post" action="KalkulatorRD.php" >
				<table> 
					<tr><td>Masukkan Panjang</td><td>:</td><td><input type="number" name="panjang" required/></td></tr>
					<tr><td>Masukkan Lebar</td><td>:</td><td><input type="number" name="lebar" required/></td></tr>
					<tr><td colspan='1'> Pilihan :</td></tr>
					<tr><td colspan='2'align="center"><input type="radio" name="rbutton_persegipanjang" id="r5" value="Hitung Luas" onclick="Checkradiobutton2()"/>Hitung Luas</td>
					<td colspan='2'><input type="radio" name="rbutton_persegipanjang" id="r6" value="Hitung Keliling" onclick="Checkradiobutton2()"/>Hitung Keliling</td></tr>
					<tr><td><input id="button_persegipanjang" type="submit" name="hasil3" value="Hasil" /></td>
				</table>
				</form>
			</div>
			</div>
		</div>

		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
				<button type="button" class="btn btn-info" data-toggle="collapse"  data-parent="#accordion" data-target="#collapse4">Lingkaran</button>
				</h4>
			</div>
			<div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">			
				<form method="post" action="KalkulatorRD.php" >
				<table>
					<tr><td>Masukkan Jari-jari</td><td>:</td><td><input type="number" name="jarijari" required/></td></tr>
					<tr><td colspan='1'> Pilihan :</td></tr>
					<tr><td colspan='2'align="center"><input type="radio" name="rbutton_lingkaran" id="r7" value="Hitung Luas" onclick="Checkradiobutton3()"/>Hitung Luas</td>
					<td colspan='2'><input type="radio" name="rbutton_lingkarang" id="r8" value="Hitung Keliling" onclick="Checkradiobutton3()"/>Hitung Keliling</td></tr>
					<tr><td><input id="button_lingkaran" type="submit" name="hasil4" value="Hasil" /></td>

				</table>
				</form>
			</div>
			</div>
		</div>

		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
				<button type="button" class="btn btn-info" data-toggle="collapse"  data-parent="#accordion" data-target="#collapse5">Belah Ketupat</button>
				</h4>
			</div>
			<div id="collapse5" class="panel-collapse collapse">
            <div class="panel-body">	
				<form method="post" action="KalkulatorRD.php" >
				<table>
					<tr><td>Masukkan diagonal satu</td><td>:</td><td><input type="number" id="dsatu" name="dsatu" required/></td></tr>
					<tr><td>Masukkan diagonal Dua</td><td>:</td><td><input type="number" id="ddua" name="ddua" required/></td></tr>
					<tr><td>Masukkan sisi</td><td>:</td><td><input type="number" id="sisi3" name="sisi3" required/></td></tr>
					<tr><td colspan='1'> Pilihan :</td></tr>
					<tr><td colspan='2'align="center"><input type="radio" name="rbutton_belahketupat" id="r9" value="Hitung Luas" onclick="Checkradiobutton4()"/>Hitung Luas</td>
					<td colspan='2'><input type="radio" name="rbutton_belahketupat" id="r10" value="Hitung Keliling" onclick="Checkradiobutton4()"/>Hitung Keliling</td></tr>
					<tr><td><input id="button_belahketupat" type="submit" name="hasil5" value="Hasil" /></td>
				</table>
				</form>
			</div>
			</div>
		</div>
		
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
				<button type="button" class="btn btn-info" data-toggle="collapse"  data-parent="#accordion" data-target="#collapse6">Jajar Genjang</button>
				</h4>
			</div>
			<div id="collapse6" class="panel-collapse collapse">
            <div class="panel-body">	
				<form method="post" action="KalkulatorRD.php" >
				<table>
					<tr><td>Masukkan Alas</td><td>:</td><td><input type="number" id="alas2" name="alas2" required /></td></tr>
					<tr><td>Masukkan Tinggi</td><td>:</td><td><input type="number" id="tinggi2" name="tinggi2" required /></td></tr>
					<tr><td>Masukkan Sisi Miring</td><td>:</td><td><input type="number" id="sisiMiring" name="sisiMiring" required /></td></tr>
					<tr><td colspan='1'> Pilihan :</td></tr>
					<tr><td colspan='2'align="center"><input type="radio" name="rbutton_jajargenjang" id="r11" value="Hitung Luas" onclick="Checkradiobutton5()"/>Hitung Luas</td>
					<td colspan='2'><input type="radio" name="rbutton_jajargenjang" id="r12" value="Hitung Keliling" onclick="Checkradiobutton5()"/>Hitung Keliling</td></tr>
					<tr><td><input id="button_jajargenjang" type="submit" name="hasil6" value="Hasil" /></td>
				</table>
				</form>
			</div>
			</div>
		</div>

		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
				<button type="button" class="btn btn-info" data-toggle="collapse"  data-parent="#accordion" data-target="#collapse7">Layang-layang</button>
				</h4>
			</div>
			<div id="collapse7" class="panel-collapse collapse">
            <div class="panel-body">	
				<form method="post" action="KalkulatorRD.php" >
				<table>
					<tr><td>Masukkan diagonal satu</td><td>:</td><td><input type="number" id="dsatu1" name="dsatu1" required/></td></tr>
					<tr><td>Masukkan diagonal Dua</td><td>:</td><td><input type="number" id="ddua1" name="ddua1" required/></td></tr>
					<tr><td>Masukkan sisi miring satu</td><td>:</td><td><input type="number" id="sisimiring1" name="sisimiring1" required/></td></tr>
					<tr><td>Masukkan sisi miring dua</td><td>:</td><td><input type="number" id="sisimiring2" name="sisimiring2" required/></td></tr>
					<tr><td colspan='1'> Pilihan :</td></tr>
					<tr><td colspan='2'align="center"><input type="radio" name="rbutton_layang" id="r13" value="Hitung Luas" onclick="Checkradiobutton6()"/>Hitung Luas</td>
					<td colspan='2'><input type="radio" name="rbutton_layang" id="r14" value="Hitung Keliling" onclick="Checkradiobutton6()"/>Hitung Keliling</td></tr>
					<tr><td><input id="button_layang" type="submit" name="hasil7" value="Hasil" /></td>
				</table>
				</form>
			</div>
			</div>
		</div>		
		
</div>
</div>
</div>
</div>


<?php

if(isset($_POST['LuasSegitiga'])){
	$alas = $_POST['alas']; 
	$tinggi = $_POST['tinggi'];
	  $hasilluas = ($alas * $tinggi)/2 ;
	  
	echo "<center>Alas " .$alas."</center>";
	echo "<center></br> Tinggi " .$tinggi."</center>";
	echo "<center></br> Jadi luas Segitiga adalah 1/2 alas x tinggi= ".$hasilluas."</center>";
	  
	}
	elseif(isset($_POST['KelilingSegitiga'])){
	  $sisi3=$_POST['sisiSegitiga'];
	  $hasilkeliling=($sisi3+$sisi3+$sisi3);
	    
	echo "<center></br> Sisi " .$sisi3."</center>";
	echo "<center></br> Jadi Keliling Segitiga adalah ".$hasilkeliling."</center>";
}

elseif(isset($_POST['LuasPersegi'])){
	$sisi = $_POST['sisi'];
	$hasilluas1 = ($sisi * $sisi);
	
	echo "<center></br> Sisi " .$sisi."</center>";
	echo "<center></br> Jadi Luas Persegi adalah ".$hasilluas1."</center>";
}
elseif(isset($_POST['KelPersegi'])){
	$sisi = $_POST['sisi'];
	$hasilkel1= (4*$sisi);
	
	echo "<center></br> Sisi " .$sisi."</center>";
	echo "<center></br> Jadi Keliling Persegi adalah ".$hasilkel1."</center>";
}

elseif(isset($_POST['LuasPersegiPanjang'])){
$panjang = $_POST['panjang']; 
$lebar = $_POST['lebar'];	
	  $hasilluas2 = ($panjang * $lebar);
	  
  echo "<center></br>Panjang " .$panjang."</center>";
  echo "<center></br> Lebar " .$lebar."</center>"; 
  echo "<center></br> Jadi Luas Persegi Panjang adalah ".$hasilluas2."</center>";
}

elseif(isset($_POST['KelPersegiPanjang'])){
$panjang = $_POST['panjang']; 
$lebar = $_POST['lebar'];

  $hasilkel2= 2*($panjang+$lebar);
  
  echo "<center></br>Panjang " .$panjang."</center>";
  echo "<center></br> Lebar " .$lebar."</center>";
  echo "<center></br> Jadi Keliling Persegi Panjang adalah ".$hasilkel2."</center>";
}

elseif(isset($_POST['LuasLingkaran'])){
$jarijari = $_POST['jarijari']; 
$phi =3.14;
  $hasilluas3 = ($phi*($jarijari*$jarijari));
	
	echo "<center>Jari-Jari " .$jarijari."</center>"; 
	echo "<center></br> Jadi luas Lingkaran adalah ".$hasilluas3."</center>";
}

elseif(isset($_POST['KelLingkaran'])){
$jarijari = $_POST['jarijari']; 
$phi =3.14;

  $hasilkel3=(2*$phi*$jarijari);
  
	echo "<center>Jari-Jari " .$jarijari."</center>"; 
	echo "<center></br> Jadi Keliling Lingkaran adalah ".$hasilkel3."</center>";
  
}

elseif(isset($_POST['LuasBelahKetupat'])){
$diagonalsatu = $_POST['dsatu']; 
$diagonaldua =$_POST['ddua'];	
	  $hasilluas4 = ($diagonalsatu*$diagonaldua)/2;
  
  echo "<center>Diagonal Satu " .$diagonalsatu."</center>"; 
  echo "<center>Diagonal Dua " .$diagonaldua."</center>";
  echo "<center></br> Jadi Luas Belah Ketupat adalah ".$hasilluas4."</center>";
}

elseif(isset($_POST['KelBelahKetupat'])){
$sisi3=$_POST['sisi3'];

  $hasilkel4=(4*$sisi3);
  
  echo "<center>Diagonal Dua " .$sisi3."</center>";
  echo "<center></br> Jadi Keliling Belah Ketupat adalah ".$hasilkel4."</center>";
  
}

elseif(isset($_POST['LuasJajarGenjang'])){
$alas2 = $_POST['alas2']; 
$tinggi2 = $_POST['tinggi2'];	
	 $hasilluas1 = ($alas2 * $tinggi2);

	echo "<center>Alas " .$alas2."</center>";
  echo "<center></br> Tinggi " .$tinggi2."</center>"; 
  echo "<center></br> Jadi luas Jajar Genjang adalah 1/2 alas x tinggi= ".$hasilluas1."</center>";
	 }

elseif(isset($_POST['KelJajarGenjang'])){
$alas2 = $_POST['alas2']; 
$sisimiring=$_POST['sisiMiring'];

  $hasilkeliling1=(2*$alas2)+(2*$sisimiring);

  echo "<center></br> Sisi Miring " .$sisimiring."</center>";
  echo "<center></br> Jadi Keliling Jajar Genjang adalah ".$hasilkeliling1."</center>";
    
}
elseif(isset($_POST['LuasLayang'])){
$diagonalsatu1 = $_POST['dsatu1']; 
$diagonaldua1 =$_POST['ddua1'];
  $hasilluas5 = ($diagonalsatu1*$diagonaldua1)/2;
  
  echo "<center>Diagonal Satu " .$diagonalsatu1."</center>";
  echo "<center>Diagonal Dua " .$diagonaldua1."</center>";
  echo "<center></br> Jadi luas Layangan adalah ".$hasilluas5."</center>";
	
}

elseif(isset($_POST['KelLayang'])){

$sisimiring1=$_POST['sisimiring1'];
$sisimiring2=$_POST['sisimiring2'];

  $hasilkel5=2*($sisimiring1*$sisimiring2);
  
  echo "<center>Sisi Miring satu " .$sisimiring1."</center>";
  echo "<center>Sisi Miring dua " .$sisimiring2."</center>";
  echo "<center></br> Jadi Keliling Layangan adalah ".$hasilkel5."</center>";
  
}
else {
	echo "<br>";
	echo"<center><h2><b> Hasilnya :</b></h></center>";
	echo "<center><b> Masukkan Angka anda terlebih dahulu!</b></center>";
}

?>

	
</body>
</html>
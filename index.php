<html>
<head>
<title>Halaman Utama_KOPERASI ISMUJM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<style type="text/css">
header
	{
	background-color: #00cc99;
	position: fixed;
	width: 100%;
	height: 40px;
	left: 0px;
	top: 0px;
	font-family:"Arial Rounded MT";
	z-index: 1;
	}

body
	{
	background-color: #e6e6e6;
	text-align: center;

	}

#judul
	{
	position: relative;
	top: 10px;
	font-family:"arial black";
	text-align: center;
	padding: 2px;
	color: white;
	text-shadow: 1px 1px 15px #cae8d5, 0 0 15px #cae8d5, 0 0 5px black; /*h v blur warna*/
	background-color: transparent;
	z-index: -2;
	}

img1
	{
	position: relative;
	z-index: 0;
	}
#fp
	{
	position: absolute;
	top: 300px;
	color: white;
	right: 30px;
	font-family:"segoe script";
	font-size: 30;
	z-index: 0;
	}

p.caption
	{
	text-shadow: 1px 1px 15px #cae8d5, 0 0 15px #cae8d5, 0 0 5px darkgreen;
	}

p.table
	{
	position: fixed;
	}

tanggal
	{
	font-family: tahoma;
	color: #99ff99;
	}

waktu
	{
	font-family: tahoma;
	position: fixed;
	right: 20px;
	top: 20px;
	color: black;
	z-index: 2;
	}

a:link
	{
	text-decoration: none;
	color: white;
	}

a:visited
	{
	text-decoration: none;
	color: white;
	}

#footer
	{
	background-color: black;
	color: white;
	font-family:"Arial Rounded MT";
	clear: both;
	text-align: center;
	padding: 5px;	 	 
	}


</style>

<script type="text/javascript">
function waktu()
	{
	var d = new Date();
	var h = d.getHours();
	var m = d.getMinutes();
	var s = d.getSeconds();
	
	var a, b, c;
	if (h < 10) {a = 0} else {a = "";}
	if (m < 10) {b = 0} else {b = "";}
	if (s < 10) {c = 0} else {c = "";}
	
	document.getElementById('waktu').innerHTML = "<font size=2><b> [ " + a + h + " : " + b + m + " : " + c + s + " ]</font></b> ";
	setTimeout("waktu()",500);
	}

function tanggal()
	{
	var d = new Date();
	var hari = d.getDay();
	var tgl = d.getDate();
	var bulan = d.getMonth();
	var tahun = d.getFullYear();

	if(hari==1) hari="Senin";
	else if(hari==2) hari="Selasa";
	else if(hari==3) hari="Rabu";
	else if(hari==4) hari="Kamis";
	else if(hari==5) hari="Jumat";
	else if(hari==6) hari="Sabtu";
	else hari="Minggu";

	if(bulan==0) bulan="Januari";
	else if(bulan==1) bulan="Februari";
	else if(bulan==2) bulan="Maret";
	else if(bulan==3) bulan="April";
	else if(bulan==4) bulan="Mei";
	else if(bulan==5) bulan="Juni";
	else if(bulan==6) bulan="Juli";
	else if(bulan==7) bulan="Agustus";
	else if(bulan==8) bulan="September";
	else if(bulan==9) bulan="Oktober";
	else if(bulan==10) bulan="November";
	else bulan="Desember";

	document.write("<font size=2><b>"+ hari+ ", " + tgl + " " + bulan+ " " + tahun+ "</font></b>");
	}

function gantiwarna1()
	{
	document.getElementById("color1").style.backgroundColor = "white";
	document.getElementById("colors1").style.color="009982";
	}

function gantiwarna2()
	{
	document.getElementById("color1").style.backgroundColor = "transparent";
	document.getElementById("colors1").style.color="white";
	}

function gantiwarna3()
	{
	document.getElementById("color2").style.backgroundColor = "white";
	document.getElementById("colors2").style.color="009982";
	}

function gantiwarna4()
	{
	document.getElementById("color2").style.backgroundColor = "transparent";
	document.getElementById("colors2").style.color="white";
	}

function gantiwarna5()
	{
	document.getElementById("color3").style.backgroundColor = "white";
	document.getElementById("colors3").style.color="009982";
	}

function gantiwarna6()
	{
	document.getElementById("color3").style.backgroundColor = "transparent";
	document.getElementById("colors3").style.color="white";
	}

function gantiwarna7()
	{
	document.getElementById("color4").style.backgroundColor = "white";
	document.getElementById("colors4").style.color="009982";
	}

function gantiwarna8()
	{
	document.getElementById("color4").style.backgroundColor = "transparent";
	document.getElementById("colors4").style.color="white";
	}

function gantiwarna9()
	{
	document.getElementById("color5").style.backgroundColor = "white";
	document.getElementById("colors5").style.color="009982";
	}

function gantiwarna10()
	{
	document.getElementById("color5").style.backgroundColor = "transparent";
	document.getElementById("colors5").style.color="white";
	}

</script>

</head>

<body>
<body onload="waktu()">
<waktu div id="waktu"></div></waktu>

<header><p class="table"><div class="container">
	<table border=0  bgcolor=transparent height=40>
	

	<td width=180px id="color1" align=center onmouseover="gantiwarna1()" onmouseout="gantiwarna2()">
	<a href="index.php"><img src="images/logoismujm.jpg" class="img-circle"  width=35% height=35></a>
	<a href="index.php" id="colors1">BERANDA </a>
	</td>

	<td width=180px  id="color2" align=center onmouseover="gantiwarna3()" onmouseout="gantiwarna4()" class="dropdown">
	<a href="index.php" id="colors2" data-toggle="dropdown">Profil Koperasi <span class="caret"></span></a>
	<ul class="dropdown-menu">
	<li><a href="visimisistruktur.php" align="center"><font color="009982">Visi, Misi, Struktur</a></li></font>
	<li><a href="sejarahkoperasi.php" align="center"><font color="009982">Sejarah</a></li></font>
	<li><a href="kontak.php" align="center"><font color="009982">Kontak</a></li></font>
	</ul>
	</div></div></td>

	<td width=180px id="color3" align=center onmouseover="gantiwarna5()" onmouseout="gantiwarna6()" class="dropdown">
	<a href="index.php" id="colors3" data-toggle="dropdown">Rumah Pintar <span class="caret"></span></a>
	<ul class="dropdown-menu">
	<li><a href="fasilitasrumpin.php" align="center"><font color="009982">Fasilitas</a></li></font>
	<li><a href="strukturrumpin.php" align="center"><font color="009982">Struktur</a></li></font>
	</ul>
	</div></div></td>

	<td width=180px id="color4" align=center onmouseover="gantiwarna7()" onmouseout="gantiwarna8()" class="dropdown">
	<a href="index.php" id="colors4" data-toggle="dropdown">Bisnis Koperasi <span class="caret"></span></a>
	<ul class="dropdown-menu">
	<li><a href="produk.php" align="center"><font color="009982">Produk</a></li></font>
	<li><a href="jasa.php" align="center"><font color="009982">Jasa</a></li></font>
	</ul>
	</div></div></td>

	<td width=130px id="color5" align=center onmouseover="gantiwarna9()" onmouseout="gantiwarna10()"><a href="berita.php" id="colors5">Berita</a></td>
	<td width=200px align=center><tanggal><script>tanggal();</script></tanggal></td>
	
	<td width=180px align=center  class="dropdown">
	<a href="index.php" data-toggle="dropdown"><img src="images/avatar.png" class="img-circle" width=25% height=25></a> <span class="caret"></span>
	<ul class="dropdown-menu">
	<li><a href="login.php" align="center"><font color="009982">Log In</font></a></li>
	</ul>
	</div></div></td>
	</table></p>
</header>
<br><br>


<img1><img src="images/view1.jpg" width=100%></img1>
<div id="fp">Desa Tanjung Pasir...</div>
<div id="judul"><h1>KOPERASI IKHTIAR SWADAYA MITRA</h1><font color="red"><h2>USAHA JAYA MANDIRI</h2>
</div></font>




<br>	<p style="font-size: 18px"><font color="009982", font family="century gothic">
	KOPERASI ISM UJM berada di Desa Tanjung Pasir dan beranggotakan ibu-ibu pedagang,  <br>
	dengan prioritas utama dari koperasi ini adalah kerajinan pasirnya yang terkenal.<br>
	Koperasi ini sudah memiliki struktur dan juga ijin untuk berkoperasi.<br>
	</p></font>

<style>
.carousel-inner > .item > img,
.carousel-inner > .item > a > img
{
width: 80%;
height: 60%;
margin: auto;
}
</style>

<div class="container">
	<br>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	<li data-target="#myCarousel" data-slide-to="1"></li>
	<li data-target="#myCarousel" data-slide-to="2"></li>
	<li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
		<img src="images/tampakdepan.jpg">
			<div class="carousel-caption">
			<h3><p class="caption">Rumah Pintar Koperasi ISMUJM</p></h3>
          			<p class="caption">Gambar tampak depan Rumah Pintar Koperasi ISMUJM.</p>
			</div>
		</div>

		<div class="item">
		<img src="images/plang rumah pintar.jpg">
			<div class="carousel-caption">
			<h3><p class="caption">Plang Rumah Pintar</p></h3>
          			<p><p class="caption">Gambar plang Rumah Pintar Koperasi ISMUJM.</p>
			</div>
		</div>

		<div class="item">
		<img src="images/pondok.jpg">
			<div class="carousel-caption">
			<h3><p class="caption">Pondok di halaman koperasi Tanjung Pasir</p></h3>
          			<p class="caption">Tempat bersantai dan bersosialisasi.</p>
			</div>
		</div>
    
		<div class="item">
		<img src="images/perahu.jpg">
			<div class="carousel-caption">
			<h3><p class="caption">Perahu Tanjung Pasir</h3>
          			<p class="caption">Merupakan salah satu fasilitas pelayanan jasa Koperasi ISMUJM.</p>
			</div>
		</div>

		<div class="item">
		<img src="images/allkerajinan.jpg">
			<div class="carousel-caption">
			<h3><p class="caption">Kerajinan Tangan</h3>
          			<p class="caption">Hasil kerajinan tangan anggota koperasi.</p>
			</div>
		</div>
	</div>

	</div>
</div>

<br><br><br>

<div id="footer">

<center>
<table border=0 width="100%">
<td align="right"><font color="white">
Website ini hasil kerjasama UNIKA Atma Jaya dan Koperasi ISM UJM<br>Hak cipta 2015-2016 <br>by Tim UNIKA Atma Jaya</td>
<td align="left">&nbsp<img src="images/logoatmajaya.gif" width=10%></td></center>
</table>
</div>

</body>
<html>

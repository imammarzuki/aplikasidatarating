<!doctype html>
<html>
<head>
<title>Aplikasi Pengumpul Data Unknown Rating Destinasi Wisata</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body bgcolor="azure">
<div align="right">
<a href="output.php">Lihat Seluruh Data Input (sorting berdasarkan nama secara ascending)</a>
</div>
<div align="center">
Terimakasih telah bepartisipasi dalam penginputan data
<h1>Data yang Anda inputkan :</h1>
<table border="1" cellpadding="10" cellspacing="0">
<?php
include "koneksi.php";
$nama=$_GET['nama'];
$asal=$_GET['asal'];
$usia=$_GET['usia'];
$kelamin=$_GET['kelamin'];
$hobi=$_GET['hobi'];
$status=$_GET['status'];
$pendidikan=$_GET['pendidikan'];
$pekerjaan=$_GET['pekerjaan'];
$frekuensi=$_GET['frekuensi'];
$jenis=$_GET['jenis'];
$alasan=$_GET['alasan'];
$teman=$_GET['teman'];
$kendaraan=$_GET['kendaraan'];
$anggaran=$_GET['anggaran'];
$penilaianjatimpark1=$_GET['penilaianjatimpark1'];
$penilaianjatimpark2=$_GET['penilaianjatimpark2'];
$penilaianjatimpark3=$_GET['penilaianjatimpark3'];
$penilaianmuseumangkut=$_GET['penilaianmuseumangkut'];
$penilaianselecta=$_GET['penilaianselecta'];
$penilaianbns=$_GET['penilaianbns'];
$penilaianecogreenpark=$_GET['penilaianecogreenpark'];
$penilaianalunalunkotabatu=$_GET['penilaianalunalunkotabatu'];
$penilaiankusumaagro=$_GET['penilaiankusumaagro'];
$penilaiancangar=$_GET['penilaiancangar'];
$penilaiancobantalun=$_GET['penilaiancobantalun'];
$penilaianpemandiansonggoriti=$_GET['penilaianpemandiansonggoriti'];
$penilaiancobanrais=$_GET['penilaiancobanrais'];
$penilaianpredatorfunpark=$_GET['penilaianpredatorfunpark'];
$sql="insert into responden values (NULL,'$nama','$asal','$usia','$kelamin','$hobi','$status','$pendidikan','$pekerjaan','$frekuensi','$jenis','$alasan','$teman','$kendaraan','$anggaran','$penilaianjatimpark1','$penilaianjatimpark2','$penilaianjatimpark3','$penilaianmuseumangkut','$penilaianselecta','$penilaianbns','$penilaianecogreenpark','$penilaianalunalunkotabatu','$penilaiankusumaagro','$penilaiancangar','$penilaiancobantalun','$penilaianpemandiansonggoriti','$penilaiancobanrais','$penilaianpredatorfunpark')";
$query=mysqli_query($nyambung,$sql);
if($query){
	echo "Data anda sudah masuk ke database";
}
else{
	echo "Data anda gagal masuk ke database";
}
echo "<tr><td>Nama</td><td>$nama</td></tr>";
echo "<tr><td>Daerah Asal</td><td>$asal</td></tr>";
echo "<tr><td>Usia</td><td>$usia</td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>$kelamin</td></tr>";
echo "<tr><td>Hobi</td><td>$hobi</td></tr>";
echo "<tr><td>Status Pernikahan</td><td>$status</td></tr>";
echo "<tr><td>Pendidikan Terakhir</td><td>$pendidikan</td></tr>";
echo "<tr><td>Frekuensi Berwisata Setahun Terakhir</td><td>$frekuensi</td></tr>";
echo "<tr><td>Jenis Wisata yang Sering Dikunjungi</td><td>$jenis</td></tr>";
echo "<tr><td>Alasan Berwisata</td><td>$alasan</td></tr>";
echo "<tr><td>Teman Perjalanan</td><td>$teman</td></tr>";
echo "<tr><td>Kendaraan yang Digunakan</td><td>$kendaraan</td></tr>";
echo "<tr><td>Menyediakan Anggaran untuk Berwisata</td><td>$anggaran</td></tr>";
echo "<tr><td>Penilaian Terhadap Jatim Park 1</td><td>$penilaianjatimpark1</td></tr>";
echo "<tr><td>Penilaian Terhadap Jatim Park 2</td><td>$penilaianjatimpark2</td></tr>";
echo "<tr><td>Penilaian Terhadap Jatim Park 3</td><td>$penilaianjatimpark3</td></tr>";
echo "<tr><td>Penilaian Terhadap Museum Angkut</td><td>$penilaianmuseumangkut</td></tr>";
echo "<tr><td>Penilaian Terhadap Selecta</td><td>$penilaianselecta</td></tr>";
echo "<tr><td>Penilaian Terhadap BNS</td><td>$penilaianbns</td></tr>";
echo "<tr><td>Penilaian Terhadap Eco Green Park</td><td>$penilaianecogreenpark</td></tr>";
echo "<tr><td>Penilaian Terhadap Alun-alun Kota Batu</td><td>$penilaianalunalunkotabatu</td></tr>";
echo "<tr><td>Penilaian Terhadap Kusuma Agro</td><td>$penilaiankusumaagro</td></tr>";
echo "<tr><td>Penilaian Terhadap Cangar</td><td>$penilaiancangar</td></tr>";
echo "<tr><td>Penilaian Terhadap Coban Talun</td><td>$penilaiancobantalun</td></tr>";
echo "<tr><td>Penilaian Terhadap Pemandian Songgoriti</td><td>$penilaianpemandiansonggoriti</td></tr>";
echo "<tr><td>Penilaian Terhadap Coban Rais</td><td>$penilaiancobanrais</td></tr>";
echo "<tr><td>Penilaian Terhadap Predator Fun Park</td><td>$penilaianpredatorfunpark</td></tr>";
?>
</table>
<h4><a href="index.html">Kembali ke Halaman Awal</a> | <a href="output.php">Lihat Seluruh Data Input (sorting berdasarkan nama secara ascending)</a></h4>
<br><br>
<b>By Imam Marzuki 7022222004</b>
</div>
</body>
</html>
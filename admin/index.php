<!doctype html>
<html>
<head>
<title>Seluruh Data Input</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<body bgcolor="azure">
<div align="center">
<h1>Seluruh Data Input</h1>
<table border="1" cellpadding="10" cellspacing="0">
<tr><th>No</th><th>User ID</th><th>Daerah Asal</th><th>Usia</th><th>Jenis Kelamin</th><th>Hobi</th><th>Status Pernikahan</th><th>Pendidikan Terakhir</th><th>Pekerjaan</th><th>Frekuensi Berwisata Setahun Terakhir</th><th>Jenis Wisata yang Sering Dikunjungi</th><th>Alasan Berwisata</th><th>Teman Perjalanan</th><th>Kendaraan yang Digunakan</th><th>Menyediakan Anggaran</th><th>Jatim Park 1</th><th>Jatim Park 2</th><th>Jatim Park 3</th><th>Museum Angkut</th><th>Selecta</th><th>BNS</th><th>Eco Green Park</th><th>Alun-alun Kota Batu</th><th>Kusuma Agro</th><th>Cangar</th><th>Coban Talun</th><th>Pemandian Songgoriti</th><th>Coban Rais</th><th>Predator Fun Park</th><th>Tindakan</th></tr>
<?php
include "../koneksi.php";
$sql2="select count(*) from responden";
$query=mysqli_query($nyambung,$sql2);
$jumlah=mysqli_fetch_row($query);
echo "Jumlah Responden Sebanyak $jumlah[0] orang";
$sql="select * from responden";
$query=mysqli_query($nyambung,$sql);
$no=1;
while($baris=mysqli_fetch_row($query)){
	$id=$baris[0];
	$nama=$baris[1];
	$asal=$baris[2];
	$usia=$baris[3];
	$kelamin=$baris[4];
	$hobi=$baris[5];
	$status=$baris[6];
	$pendidikan=$baris[7];
	$pekerjaan=$baris[8];
	$frekuensi=$baris[9];
	$jenis=$baris[10];
	$alasan=$baris[11];
	$teman=$baris[12];
	$kendaraan=$baris[13];
	$anggaran=$baris[14];
	$penilaianjatimpark1=$baris[15];
	$penilaianjatimpark2=$baris[16];
	$penilaianjatimpark3=$baris[17];
	$penilaianmuseumangkut=$baris[18];
	$penilaianselecta=$baris[19];
	$penilaianbns=$baris[20];
	$penilaianecogreenpark=$baris[21];
	$penilaianalunalunkotabatu=$baris[22];
	$penilaiankusumaagro=$baris[23];
	$penilaiancangar=$baris[24];
	$penilaiancobantalun=$baris[25];
	$penilaianpemandiansonggoriti=$baris[26];
	$penilaiancobanrais=$baris[27];
	$penilaianpredatorfunpark=$baris[28];
	echo "<tr><td>$no</td><td>$id</td><td>$asal</td><td>$usia</td><td>$kelamin</td><td>$hobi</td><td>$status</td><td>$pendidikan</td><td>$pekerjaan</td><td>$frekuensi</td><td>$jenis</td><td>$alasan</td><td>$teman</td><td>$kendaraan</td><td>$anggaran</td><td>$penilaianjatimpark1</td><td>$penilaianjatimpark2</td><td>$penilaianjatimpark3</td><td>$penilaianmuseumangkut</td><td>$penilaianselecta</td><td>$penilaianbns</td><td>$penilaianecogreenpark</td><td>$penilaianalunalunkotabatu</td><td>$penilaiankusumaagro</td><td>$penilaiancangar</td><td>$penilaiancobantalun</td><td>$penilaianpemandiansonggoriti</td><td>$penilaiancobanrais</td><td>$penilaianpredatorfunpark</td><td><a href='edit.php?id=$id&nama=$nama&asal=$asal&usia=$usia&kelamin=$kelamin&hobi=$hobi&status=$status&pendidikan=$pendidikan&pekerjaan=$pekerjaan&frekuensi=$frekuensi&jenis=$jenis&alasan=$alasan&teman=$teman&kendaraan=$kendaraan&anggaran=$anggaran&penilaianjatimpark1=$$penilaianjatimpark1&penilaianjatimpark2=$penilaianjatimpark2&penilaianjatimpark3=$penilaianjatimpark3&penilaianmuseumangkut=$penilaianmuseumangkut&penilaianselecta=$penilaianselecta&penilaianbns=$penilaianbns&penilaianecogreenpark=$penilaianecogreenpark&penilaianalunalunkotabatu=$penilaianalunalunkotabatu&penilaiankusumaagro=$penilaiankusumaagro&penilaiancangar=$penilaiancangar&penilaiancobantalun=$penilaiancobantalun&penilaianpemandiansonggoriti=$penilaianpemandiansonggoriti&penilaiancobanrais=$penilaiancobanrais&penilaianpredatorfunpark=$penilaianpredatorfunpark'>Edit</a> | <a href='hapus.php?id=$id&asal=$asal&usia=$usia&kelamin=$kelamin&hobi=$hobi&status=$status&pendidikan=$pendidikan&pekerjaan=$pekerjaan&frekuensi=$frekuensi&jenis=$jenis&alasan=$alasan&teman=$teman&kendaraan=$kendaraan&anggaran=$anggaran&penilaianjatimpark1=$$penilaianjatimpark1&penilaianjatimpark2=$penilaianjatimpark2&penilaianjatimpark3=$penilaianjatimpark3&penilaianmuseumangkut=$penilaianmuseumangkut&penilaianselecta=$penilaianselecta&penilaianbns=$penilaianbns&penilaianecogreenpark=$penilaianecogreenpark&penilaianalunalunkotabatu=$penilaianalunalunkotabatu&penilaiankusumaagro=$penilaiankusumaagro&penilaiancangar=$penilaiancangar&penilaiancobantalun=$penilaiancobantalun&penilaianpemandiansonggoriti=$penilaianpemandiansonggoriti&penilaiancobanrais=$penilaiancobanrais&penilaianpredatorfunpark=$penilaianpredatorfunpark'>Hapus</a></tr>";
	$no=$no+1;
}
?>
</table>
<br>
<br>
<br>
<b>By Imam Marzuki 7022222004 @ 2024</b>
</div>
</body>
</html>

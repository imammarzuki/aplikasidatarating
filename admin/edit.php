<h1>Edit Data</h1>
<table border="1" cellspacing="0" cellpadding="10">
<form action="update.php" method="GET")
<?php
include "../koneksi.php";
$id=$_GET['id'];
$nama=$_GET['nama']
$asal=$_GET['asal']
$usia=$_GET['usia']
$kelamin=$_GET['kelamin']
$hobi=$_GET['hobi']
$status=$_GET['status']
$pendidikan=$_GET['pendidikan']
$pekerjaan=$_GET['pekerjaan']
$frekuensi=$_GET['frekuensi']
$jenis=$_GET['jenis']
$alasan=$_GET['alasan']
$teman=$_GET['teman']
$kendaraan=$_GET['kendaraan']
$anggaran=$_GET['anggaran']
$penilaianjatimpark1=$_GET['penilaianjatimpark1']
$penilaianjatimpark2=$_GET['penilaianjatimpark2']
$penilaianjatimpark3=$_GET['penilaianjatimpark3']
$penilaianmuseumangkut=$_GET['penilaianmuseumangkut']
$penilaianselecta=$_GET['penilaianselecta']
$penilaianbns=$_GET['penilaianselecta']
$penilaianecogreenpark=$_GET['penilaianecogreenpark']
$penilaianalunalunkotabatu=$_GET['penilaianalunalunkotabatu']
$penilaiankusumaagro=$_GET['penilaiankusumaagro']
$penilaiancangar=$_GET['penilaiancangar']
$penilaiancobantalun=$_GET['penilaiancobantalun']
$penilaianpemandiansonggoriti=$_GET['penilaianpemandiansonggoriti']
$penilaiancobanrais=$_GET['penilaiancobanrais']
$penilaianpredatorfunpark=$_GET['penilaianpredatorfunpark']

$sql="select * from responden where id='$id'";
$query=mysqli_query($nyambung,$sql);
$baris=mysqli_fetch_row($query);
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

echo "<tr><td>Nama</td><td><input type='hidden' name='id' value='$id'><input type='text' name='nama' value='$nama'></td></tr>";
echo "<tr><td>Daerah Asal</td><td><input type='text' name='asal' value='$asal'></td></tr>";
echo "<tr><td>Usia</td><td><input type='text' name='usia' value='$asal'></td></tr>";
echo "<tr><td>Jenis Kelamin</td><td><input type='text' name='kelamin' value='$kelamin'></td></tr>";
echo "<tr><td>Hobi</td><td><input type='text' name='hobi' value='$hobi'></td></tr>";
echo "<tr><td>Status Pernikahan</td><td><input type='text' name='status' value='$status'></td></tr>";
echo "<tr><td>Pendidikan Terakhir</td><td><input type='text' name='pendidikan' value='$pendidikan'></td></tr>";
echo "<tr><td>Pekerjaan</td><td><input type='text' name='pekerjaan' value='$pekerjaan'></td></tr>";
echo "<tr><td>Frekuensi Berwisata Setahun Terakhir</td><td><input type='text' name='frekuensi' value='$frekuensi'></td></tr>";
echo "<tr><td>Jenis Wisata yang Sering Dikunjungi</td><td><input type='text' name='jenis' value='$jenis'></td></tr>";
echo "<tr><td>Alasan Berwisata</td><td><input type='text' name='alasan' value='$alasan'></td></tr>";
echo "<tr><td>Teman Perjalanan</td><td><input type='text' name='teman' value='$teman'></td></tr>";
echo "<tr><td>Kendaraan yang Digunakan</td><td><input type='text' name='kendaraan' value='$kendaraan'></td></tr>";
echo "<tr><td>Menyiapkan Anggaran</td><td><input type='text' name='anggaran' value='$anggaran'></td></tr>";
echo "<tr><td>Penilaian Terhadap Jatim Park 1</td><td><input type='text' name='penilaianjatimpark1' value='$penilaianjatimpark1'></td></tr>";
echo "<tr><td>Penilaian Terhadap Jatim Park 2</td><td><input type='text' name='penilaianjatimpark2' value='$penilaianjatimpark2'></td></tr>";
echo "<tr><td>Penilaian Terhadap Jatim Park 3</td><td><input type='text' name='penilaianjatimpark3' value='$penilaianjatimpark3'></td></tr>";
echo "<tr><td>Penilaian Terhadap Museum Angkut</td><td><input type='text' name='penilaianmuseumangkut' value='$penilaianmuseumangkut'></td></tr>";
echo "<tr><td>Penilaian Terhadap Selecta</td><td><input type='text' name='penilaianselecta' value='$penilaianselecta'></td></tr>";
echo "<tr><td>Penilaian Terhadap BNS</td><td><input type='text' name='penilaianbns' value='$penilaianbns'></td></tr>";
echo "<tr><td>Penilaian Terhadap Eco Green Park</td><td><input type='text' name='penilaianecogreenpark' value='$penilaianecogreenpark'></td></tr>";
echo "<tr><td>Penilaian Terhadap Alun-alun Kota Batu</td><td><input type='text' name='alamat' value='$asal'></td></tr>";
echo "<tr><td>Penilaian Terhadap Jatim Park 2</td><td><input type='text' name='alamat' value='$asal'></td></tr>";
echo "<tr><td>Penilaian Terhadap Jatim Park 2</td><td><input type='text' name='alamat' value='$asal'></td></tr>";
echo "<tr><td>Penilaian Terhadap Jatim Park 2</td><td><input type='text' name='alamat' value='$asal'></td></tr>";
echo "<tr><td>Penilaian Terhadap Jatim Park 2</td><td><input type='text' name='alamat' value='$asal'></td></tr>";
echo "<tr><td>Penilaian Terhadap Jatim Park 2</td><td><input type='text' name='alamat' value='$asal'></td></tr>";
echo "<tr><td>Penilaian Terhadap Jatim Park 2</td><td><input type='text' name='alamat' value='$asal'></td></tr>";
echo "<tr><td>Daerah Asal</td><td><input type='text' name='alamat' value='$asal'></td></tr>";
echo "<tr><td>Daerah Asal</td><td><input type='text' name='alamat' value='$asal'></td></tr>";
echo "<tr><td>Daerah Asal</td><td><input type='text' name='alamat' value='$asal'></td></tr>";
echo "<tr><td>Daerah Asal</td><td><input type='text' name='alamat' value='$asal'></td></tr>";
echo "<tr><td>Daerah Asal</td><td><input type='text' name='alamat' value='$asal'></td></tr>";
?>
<tr><td></td><td><input type="submit" value="Update"></td></tr>
</table>
</form>
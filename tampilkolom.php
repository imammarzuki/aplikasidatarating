<h1>Daftar Kolom dalam Tabel Responden</h1>
<?php
include "koneksi.php";
$sql="desc responden";
$query=mysqli_query($nyambung, $sql);
$no=1;
while($baris=mysqli_fetch_row($query)){
	echo "$no. $baris[0]<br>";
	$no=$no+1;
}
?>
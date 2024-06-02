<h1>Daftar Tabel dalam Database Tourism</h1>
<?php
include "koneksi.php";
$sql="show tables";
$query=mysqli_query($nyambung, $sql);
$no=1;
while($baris=mysqli_fetch_row($query)){
	echo "$no. $baris[0]";
	$no=$no+1;
}
?>
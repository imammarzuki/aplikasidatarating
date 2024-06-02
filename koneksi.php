<?php
$host = "localhost";
$username = "imaa5562_imam";
$password = "imam123456.";
$database = "imaa5562_data";
$nyambung=mysqli_connect($host,$username,$password,$database);
if($nyambung){
	//echo "Koneksi Berhasil";
}
else{
	echo "Koneksi Gagal";
}
?>
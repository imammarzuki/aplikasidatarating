<?php
include "koneksi.php";
$sql="create table responden (id int(10) primary key auto_increment, nama varchar(200), asal varchar(100), usia varchar(50), kelamin varchar(50), hobi varchar(50), status varchar(50), pendidikan varchar(50), pekerjaan varchar(50), frekuensi varchar(50), jenis varchar(50), alasan varchar(50), teman varchar(50), kendaraan varchar(50), anggaran varchar(50), penilaianjatimpark1 varchar(50), penilaianjatimpark2 varchar(50), penilaianjatimpark3 varchar(50), penilaianmuseumangkut varchar(50), penilaianselecta varchar(50), penilaianbns varchar(50), penilaianecogreenpark varchar(50), penilaianalunalunkotabatu varchar(50), penilaiankusumaagro varchar(50), penilaiancangar varchar(50), penilaiancobantalun varchar(50), penilaianpemandiansonggoriti varchar(50), penilaiancobanrais varchar(50), penilaianpredatorfunpark varchar(50))";
$query=mysqli_query($nyambung,$sql);
if($query){
	echo "Berhasil Membuat Tabel responden";
}
else{
	echo "Gagal Membuat Tabel";
}
?>
<?php
include "koneksi.php";
$sql="drop table responden";
$query=mysqli_query($nyambung,$sql);
header("Location:tampiltabel.php");
?>
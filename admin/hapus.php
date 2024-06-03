<?php
include "../koneksi.php";
$id=$_GET['id'];
$sql="delete from responden where id='$id'";
$query=mysqli_query($nyambung,$sql);
header("Location:index.php");
?>
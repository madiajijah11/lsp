<?php
	include "koneksi.php";
	$id=$_GET['idkustomer'];
	mysqli_query($koneksi,"DELETE FROM kustomer WHERE idkustomer='$id'");
	header('Location:index.php')
?>
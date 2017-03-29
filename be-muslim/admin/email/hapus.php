<?php
	include "../koneksi.php";
	$id = $_GET['id'];

	$sql = mysqli_query($koneksi,"DELETE FROM email WHERE id_job = '$id'");

	if($sql){
		header('location:index.php');
	}else{
		echo "<h4>Maaf,telah terjadi kesalahan</h4>";
	}
?>
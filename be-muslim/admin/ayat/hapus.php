<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$tabel = $_GET['tabel'];

	$sql = mysqli_query($koneksi,"DELETE FROM $tabel WHERE id_ayat = '$id'");

	if($sql){
		header('location:surah.php');
	}else{
		echo "<h4>Maaf,telah terjadi kesalahan</h4>";
	}
?>
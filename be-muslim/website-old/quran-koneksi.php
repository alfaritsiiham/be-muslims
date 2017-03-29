<?php
	$db_host = "mysql.idhostinger.com";
	$db_user = "u346366000_users";
	$db_pass = "tanpapassword";
	$db_name = "u346366000_quran";

	$qkoneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if(mysqli_connect_errno()){
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
	}
?>
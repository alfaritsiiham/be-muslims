<?php
	include"base_url.php";
	$logout = session_destroy();

	if($logout){
		header('location:'.$base_url.'/pages/login');
	}else{

	}
?>
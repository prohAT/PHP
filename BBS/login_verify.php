<?php
	session_start();
	$username = @$_SESSION['username'];
	if(isset($username)){
		$url = "add_form.php";
		echo "<script>";
		echo "window.location.href='$url'";
		echo "</script>";
	}else{
		$url = "login.php";
		echo "<script>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
?>
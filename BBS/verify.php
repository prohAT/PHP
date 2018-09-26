<?php
session_start();
include 'conn.php';
$username = $_GET['username'];
$pwd = $_GET["pwd"];
$sql = "select * from user where username='$username' and pwd='$pwd'";
$res = mysql_query($sql);
$row = mysql_fetch_array($res);
if(is_array($row)){
	$_SESSION['username'] = $username;
	$url = "index.php";
	echo "<script>";
	echo "window.location.href='$url'";
	echo "</script>";
}else{
	echo "登录失败!";
	header("Refresh:2;url=login.php");
}
?>
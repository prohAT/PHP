<?php
include 'conn.php';
$username = $_GET['username'];
$pwd = $_GET["pwd"];
$sql = "select * from user where username='$username' and pwd='$pwd'";
echo $sql;
$res = mysql_query($sql);
$row = mysql_fetch_array($res);
if(is_array($row)){
	echo "登录成功!";
}else{
	echo "登录失败!";
}
?>
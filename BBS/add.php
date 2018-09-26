<?php
include "conn.php";
$username = $_POST['username'];
$title = $_POST['title'];
$content = $_POST['content'];
if($_POST['submit']){
	$sql = "insert into message(id,user,title,content,date) values(null,'{$username}','{$title}','{$content}',now())";
	$res = mysql_query($sql);
	if($res){
		echo '插入成功';
	}else{
		echo '插入失败';
	}

}
?>

<?php
//页面跳转，实现方式为javascript 
$url = "index.php";
echo "<script>";
echo "window.location.href='$url'";
echo "</script>";
?>
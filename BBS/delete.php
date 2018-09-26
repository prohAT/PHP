<?php
include 'conn.php';
$id = $_GET['id'];
$sql = "delete from message where id = $id";
$res = mysql_query($sql);
if($res){
	echo '删除成功';
}else{
	echo '删除失败';
}

?>
<?php
//页面跳转，实现方式为javascript 
$url = "list.php";
echo "<script>";
echo "window.location.href='$url'";
echo "</script>";
?>
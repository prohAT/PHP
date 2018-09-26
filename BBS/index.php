<html>
<head>
<?php
session_start();
include("conn.php");
$username = @$_SESSION['username'];
?>
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 
if(isset($username)){
	echo "当前用户:".$username;
}
?>
<?php 
if(isset($username)){
?>
	
	<form action="logout.php">
	&nbsp&nbsp&nbsp<input type="submit" value="退出登录">
	</form>
	
<?php }?>

<br><a href="./login_verify.php">发布留言</a>
<table width=800 border=1>
<?php
$sql = 'select * from message order by id desc';
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
?>
<tr>
<td>标题:&nbsp<?php echo $row['title']?>&nbsp&nbsp&nbsp用户:&nbsp<?php echo $row['user']?>&nbsp&nbsp&nbsp日期:&nbsp<?php echo $row['date']?><br>发表内容:&nbsp<?php echo $row['content']?></td>
<td><a href="./delete.php?id=<?php echo $row['id']?>">删除</a></td>
</tr>
<?php }?>
<table>
</body>
</html>
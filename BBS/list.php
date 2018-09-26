<html>
<head>
<?php
include("conn.php");
session_start();
//$_Session['username'] = "jack";
print_r($_Session);
$username = @$_Session['username'];

//echo "session:$username";
?>
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
<a href="./add.html">发布留言</a>
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
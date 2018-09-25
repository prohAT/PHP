<html>
<head>
<?php
include("conn.php");
?>
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width=800 height=500 border=1>
<?php
$sql = 'select * from message order by id desc';
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
?>
<tr>
<td>标题:&nbsp<?php echo $row['title']?>&nbsp&nbsp&nbsp用户:&nbsp<?php echo $row['user']?>&nbsp&nbsp&nbsp日期:&nbsp<?php echo $row['date']?><br>发表内容:&nbsp<?php echo $row['content']?></td>
</tr>
<?php }?>
<table>
</body>
</html>
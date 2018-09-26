<?php
session_start();
$username = $_SESSION['username'];
?>
<html>
<meta charset="UTF-8">
<title>Title</title>
<link href="css.css" rel="stylesheet" type="text/css">
<body>
<form action="add.php" method="post">
用户:<input type="text" size=10 name="username" value=<?php echo $username?> readonly="readonly"><br><br>
标题:<input type="text" name="title"><br><br>
内容:<textarea name="content" rows=10 cols=50></textarea><br>
<input type="submit" name="submit" value="发布留言">
</form>
</body>
</html>
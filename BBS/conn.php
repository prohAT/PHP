<?php
$conn = @mysql_connect('localhost','root','');
mysql_select_db('bbs',$conn);
mysql_query('set names utf8');

?>
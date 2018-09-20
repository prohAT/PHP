<?php
@mysql_connect('localhost','root','');
mysql_query('set names utf8');
mysql_query('create database bbs charset utf8');
mysql_select_db('bbs');
$sql = 'CREATE TABLE message (
id tinyint(1) primary key not null,
user varchar(25) not null,
title varchar(50) not null,
content text not null)
engine=InnoDB DEFAULT charset=utf8 auto_increment=1';
$res = mysql_query($sql);
if($res){
	echo '创建成功';
}else{
	echo '创建失败';
}
	

?>
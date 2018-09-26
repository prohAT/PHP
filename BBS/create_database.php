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
mysql_query('create database user charset uft8');
$sql_register = 'CREATE TABLE user(username varchar(10) not null,pwd varchar(10) not null)';
$res1 = mysql_query($sql_register);
if($res){
	echo '创建message表成功';
}else{
	echo '创建message表失败';
}
if($res1){
	echo '创建user表成功';
}else{
	echo '创建user表失败';
}

?>
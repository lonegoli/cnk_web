<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
//$db=new SQLite3("test.db3");
include('quote.php');
$db=openSQLite3();
$db->exec("drop table if exists 'total_menu' ");
$db->exec("create table 'total_menu' (id integer primary key autoincrement,name char(32),price numeric(6,2),description char(100),pictureBUrl char(100),pictureSUrl char(100),status numeric(3),usenum numeric(3),backup char(2))");
$db->exec("drop table if exists 'table_show'");
$db->exec("create table `table_show`  ( id integer primary key autoincrement,class char(20),tablename char(20))");
$db->exec("drop table if exists 'version'");
$db->exec("create table version( id integer primary key autoincrement,version numeric(8,1),time char(20),oldversion numeric (8,1))");
$db->exec("insert into version values(null,0,0,0)");
$db->exec("drop table if exists 'administrator'");
$db->exec("create table  administrator ( id integer primary key autoincrement,username char(10),password char(20),permission  numerical(2))");
$db->exec("insert into administrator values(null,\"admin\",\"admin\",0)");
$db->exec("drop table if exists 'serviceList'");
$db->exec("create table 'serviceList'( id integer primary key autoincrement,serviceName char(30))");
$db->close();
$db=null;
?>
<?php
$db=openSQLite3Table_info();
$db->exec("drop table if exists 'table_info'");
$db->exec("create table  table_info ( id integer primary key autoincrement,tablenum numeric(5),status numeric(2))");
$db->exec("drop table if exists 'temporaryMainDish'");
$db->exec("create table 'temporaryMainDish'( id integer primary key autoincrement,dishID numeric(4),dishnum numeric(3),tablenum numeric(3))");
$db->exec("drop table if exists 'callWaiter'");
$db->exec("create table 'callWaiter'(id integer primary key autoincrement,tablenum numeric(3),callStatus numeric(2))");
$db->close();
$db=null;
?>
<a href="order.html" target='I1'>初始化成功，点击返回！</a>
</body>
</html>
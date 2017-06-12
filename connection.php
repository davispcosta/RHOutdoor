<?php
$banco = "rhoutdoor";
$senha = "p104prbk";
$host = "mysql:host=mysql5"; 
$dbhandle = mysql_connect($host, $banco, $senha);
$db_selected = mysql_select_db('rhoutdoor', $dbhandle); 
?>
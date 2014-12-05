<?php
$db_name=("tic71");
$db_server=("localhost");
$db_user=("root");
$db_pass=("");
$db_connection=mysql_connect($db_server,$db_user,$db_pass)or die("Error al conectar con la base de datos");
mysql_select_db($db_name,$db_connection) or die("La Base de Datos no existe");
mysql_query("SET NAMES utf8");
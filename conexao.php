<?php 
header('Content-Type: text/html; charset=utf-8');

$conecta = mysql_connect("localhost", "root", "") or print (mysql_error()); 
mysql_set_charset('UTF8', $conecta);
mysql_select_db("bemm", $conecta) or print(mysql_error()); 

?>
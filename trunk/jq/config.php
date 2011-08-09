<?
$server     = 'localhost';
$username   = 'root';
$password   = 'toor';
$db         = 'jq';
mysql_connect($server, $username, $password) or die('cant connect');
mysql_select_db($db);


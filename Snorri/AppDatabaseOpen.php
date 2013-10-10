<?php


ini_set('display_errors', 'on');
error_reporting(E_ALL & ~E_NOTICE);

function AppDatabaseOpen()
{
$database = "10_blikar2012-2";
$user = "10_blikar3";
$password = "blikar10";
	$link = mysql_connect("localhost", $user, $password) or die("Gat ekki tengst! Error:" . 	mysql_error());
	mysql_select_db($database,$link) or die("gat ekki opnað DB Villa: " . mysql_error());
	return($link);
}

?>

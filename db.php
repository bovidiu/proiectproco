<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="caine"; // Mysql password
$db_name="_procopiu"; // Database name

	$MYSQL_HOST  = $host;
	$MYSQL_LOGIN = $username;
	$MYSQL_PASS  = $password;
	$MYSQL_DB    = $db_name;
// connect to db
$link = mysql_connect($host,$username,$password);
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db($db_name) ) {
    die ('Can\'t use foo : ' . mysql_error());
}

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

?>
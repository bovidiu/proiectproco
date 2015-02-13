<?php
include 'db.php';
$myusername=$_POST['user'];
$mypassword=sha1($_POST['pass']);
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM utilizatori WHERE email='$myusername' and parola='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
	$row = mysql_fetch_array($result);
	session_start();
	$_SESSION['id']=$row['id'];
	$_SESSION['user']=$row['nume']." ".$row['prenume'];
	$_SESSION['g']=$row['grup'];
	header('Location: index.php');
}
else {
header('Location: login.php?er=1');
}



?>
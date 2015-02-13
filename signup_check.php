<?php
include 'db.php';
$email=$_POST['email'];
$pass=sha1($_POST['pass']);
$nume=$_POST['nume'];
$pnume=$_POST['pnume'];
$jd=$_POST['jd'];
$cont=$_POST['cont'];


$sql="INSERT into utilizatori (nume,prenume,email,parola,grup,judet,total_pct,total_pb) VALUES ('$nume','$pnume','$email','$pass','$cont','$jd',0,0)";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($result){
	$row = mysql_fetch_array($result);
	
	
	header('Location: login.php?er=2');
}




?>
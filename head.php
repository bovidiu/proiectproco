<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="lib/jquery.js"></script>
	<title><?php echo $t;?></title>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
            <a class="navbar-brand" href="#">FizicaArena</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Acasa</a></li>
        <li><a href="lectii.php">Lectii</a></li>
        <li><a href="probleme.php">Probleme</a></li>
		<li><a href="clasament.php">Clasament</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
			if (!isset($_SESSION['id'])) echo '<li><a href="login.php">Conectare</a></li>';
			else {
				echo '<p class="navbar-text">Buna, '.$_SESSION['user'].'</p>';
				echo '<li><a href="logout.php">Deconectare</a></li>';
			}
		?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
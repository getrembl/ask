
<?php
include "../connexion.php";
include "Users.php";
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
																 
		<script type="text/javascript" src="../ressources/jquery.js"></script>
	</head>
	<body>
														<div id="contener">
		<div>
			<form method="post" action="login.php">				
				<input type="text" name="pseudo" placeholder="login"/>
				<input type="password" name="password" placeholder="password"/>
				<input type="submit" value="ok">
			</form>
		</div>
		<div>
			<form method="post" action="create_account.php">
				<input type="text" name="first" placeholder="firstname">
				<input type="text" name="last" placeholder="lastname">
				<input type="email" name="mail" placeholder="mail">
				<input type="text" name="pseudo" placeholder="login"/>
				<input type="password" name="password" placeholder="password"/>
				<input type="submit" value="ok">
			</form>
			
		</div>
	</body>
</html>
	

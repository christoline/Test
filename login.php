<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login-box">
		<img src="avatar.png" class="avatar">
		<h1>Accéder ici</h1>
			<form action="process.php" method="POST">
				<p>User name :</p>
				<input type="text" id="user" name="user" required="required" placeholder="nom@gmail.com">
				<p>Password :</p>
				<input type="password" id="pass" name="pass" required="required" placeholder="Mot de passe">
				<input type="submit" id="btn" value="VALIDER">
				<a href="#">Mot de passe oublié</a>
			</form>
	</div>
</body>
</html>
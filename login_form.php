<!DOCTYPE html>
<html>
<head>
	<title>Login Formulier</title>
</head>
<body>
	<h1>Login Formulier</h1>
	<form action="login_validatie.php" method="post">
		<label for="gebruikersnaam">Gebruikersnaam:</label>
		<input type="text" id="gebruikersnaam" name="gebruikersnaam" required><br><br>
		<label for="wachtwoord">Wachtwoord:</label>
		<input type="password" id="wachtwoord" name="wachtwoord" required><br><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>

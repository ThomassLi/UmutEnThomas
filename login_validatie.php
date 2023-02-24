<?php
session_start();
// Verbinding maken met de database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Controleren of de verbinding is gelukt
if ($conn->connect_error) {
	die("Verbinding mislukt: " . $conn->connect_error);
}

// Controleren of het formulier is ingevuld en op 'login' is geklikt
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Controleren of de gebruikersnaam en het wachtwoord kloppen met de database
	$sql = "SELECT * FROM users WHERE username ='$username' AND wachtwoord='$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// Gebruikersnaam en wachtwoord zijn correct
		$_SESSION['username'] = $username;
		header('Location: welkom.php');
	} else {
		// Gebruikersnaam en wachtwoord zijn niet correct
		header('Location: login_form.php?error=1');
	}
} else {
	// Gebruikersnaam en wachtwoord zijn niet ingevuld
	header('Location: login_form.php');
}

$conn->close();
?>

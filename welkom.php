<?php
// Start de sessie
session_start();

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION['username'])) {
    header("Location: login_form.php");
}

// Verwijder de sessie bij het uitloggen
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_unset();
    session_destroy();
    header("Location: login_form.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welkom</title>
</head>
<body>
    <h1>Welkom <?php echo $_SESSION['username']; ?>!</h1>
    <p>Je bent succesvol ingelogd.</p>
    <a href="welkom.php?action=logout">Uitloggen</a>
</body>
</html>

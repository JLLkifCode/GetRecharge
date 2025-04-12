<?php
// Activez l'affichage des erreurs pour le débogage en développement (à retirer en production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Démarrage de la session
session_start();

// Vérifiez que l'utilisateur est connecté
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header("Location: ../login.php"); // Assurez-vous que le chemin est correct
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Index Admin</title>
    <!-- Vos liens et scripts -->
</head>
<body>
    <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h1>
    <p>Ceci est la page d'administration.</p>
</body>
</html>

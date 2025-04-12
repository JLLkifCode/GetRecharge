
<?php
$host = 'localhost';
$db = 'Jean-Louis';
$user = 'Jean-Louis';
$pass = 'Wv7o6bj[/@[Wdlvd';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>

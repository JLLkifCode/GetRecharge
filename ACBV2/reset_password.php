<?php
if (isset($_GET['token'])) {
    $token = htmlspecialchars($_GET['token']);

    // Connexion à la base de données
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=ma_base', 'root', '');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Vérification du token
        $query = $connexion->prepare("SELECT * FROM utilisateurs WHERE reset_token = ?");
        $query->execute([$token]);
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Traitement du nouveau mot de passe
            if (isset($_POST['new_password'])) {
                $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);
                $update = $connexion->prepare("UPDATE utilisateurs2 SET password = ?, reset_token = NULL WHERE id = ?");
                $update->execute([$new_password, $user['id']]);

                echo "Mot de passe mis à jour avec succès !";
            }
        } else {
            echo "Token invalide.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "Aucun token fourni.";
}
?>
<form method="POST" action="">
    <input type="password" name="new_password" placeholder="Nouveau mot de passe" required>
    <button type="submit">Réinitialiser le mot de passe</button>
</form>

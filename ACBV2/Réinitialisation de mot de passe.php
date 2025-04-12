<?php
$message = ""; // Variable pour afficher les messages

if (isset($_POST['reset'])) {
    $email = htmlspecialchars($_POST['email']);

    try {
        $connexion = new PDO('mysql:host=localhost;dbname=Jean-Louis', 'Jean-Louis', 'Wv7o6bj[/@[Wdlvd');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $token = bin2hex(random_bytes(50));
        $query = $connexion->prepare("UPDATE utilisateurs2 SET reset_token = ? WHERE email = ?");
        $query->execute([$token, $email]);

        $resetLink = "http://acreditbusiness.com/reset_password.php?token=" . $token;
        $message = "<div class='alert alert-success'>Lien de réinitialisation envoyé : " . htmlspecialchars($resetLink) . "</div>";
    } catch (PDOException $e) {
        $message = "<div class='alert alert-danger'>Erreur : " . htmlspecialchars($e->getMessage()) . "</div>";
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Connexion Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <link rel="stylesheet" href="styles.css">

    </head>
<body style="color: #fff;background-color:#ff6500;">
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #ff6500; color: white;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/JJIREH.png" alt="Logo" width="60" height="60" class="rounded">
            </a>
            <h1>À Crédit Business</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Formulaire de connexion.php">SE CONNECTER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Formulaire d'enregistrement.php">S'ENREGISTRER</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ASSISTANCE
                </a>
                <ul class="dropdown-menu ">
                  <li><a class="dropdown-item" href="#">FAQs</a></li>
                  <li><a class="dropdown-item" href="#">PARCOURS CLIENT</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="form.php" target="_blank">CONTACTEZ-NOUS</a></li>
                </ul>
              </li>
                 
            </ul>
            <span class="navbar-text">
              
            </span>
          </div>
        </div>
      </nav><br>

            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                    <div class="dividerWhite"></div>
                        <h1 class="text-center"><strong>Réinitialiser votre mot de passe</strong></h1><br>
<form method="POST" action="">
    <input type="email" class="form-control" name="email" placeholder="Adresse e-mail" required>
      <!-- Affichage du message entre l'input email et le bouton -->
      <i  class="btn btn-link" style="text-decoration: none; color: #007bff; text-shadow: 1px 1px #fff;">
    </i>
      
   
    <button type="submit" class="btn btn-primary w-100" name="reset">Réinitialiser le mot de passe</button>
</form>
<p>Si vous n'avez pas de compte, cliquez sur le bouton <strong>S'enregistrer</strong> dans la barre de navigation pour vous inscrire.
            </p>
            <div style="text-align: center;">
                 <img src="images/CAROUCEL3.png" alt="Description de l'image" width="100" height="100" id="imgid">
            </div>

        </div>
    </div>
</div><br>
<footer style="background-color: #333; color: white; padding: 20px;">
    <div class="container">
        <div class="row">
            <!-- Bloc À Crédit Business -->
            <div class="col-md-6 col-lg-3">
                <h4>À Crédit Business</h4>
            </div>

            <!-- Bloc Assistance -->
            <div class="col-md-6 col-lg-3">
                <h4>Assistance</h4>
                <ul>
                    <li><a href="#" style="text-decoration: none; color: white;">FAQs</a></li>
                    <li><a href="#" style="text-decoration: none; color: white;">Nos boutiques</a></li>
                </ul>
            </div>

            <!-- Bloc Contact -->
            <div class="col-md-6 col-lg-3">
                <h4>Contactez-nous</h4>
                <ul>
                    <li><a href="form.php" style="text-decoration: none; color: white;">Nous écrire</a></li>
                </ul>
            </div>

            <!-- Bloc Nos autres activités -->
            <div class="col-md-6 col-lg-3">
                <h4>Nos autres activités</h4>
                <ul>
                    <li>
                        <a href="#" style="text-decoration: none; color: white;">Agence digitale full-stack</a>
                        <p><em>Nous gérons les aspects techniques de votre présence en ligne.</em></p>
                    </li>
                    <li><a href="#" style="text-decoration: none; color: white;">Développement front-end</a></li>
                    <li><a href="#" style="text-decoration: none; color: white;">Développement back-end</a></li>
                    <li><a href="#" style="text-decoration: none; color: white;">Hébergement web</a></li>
                    <li><a href="#" style="text-decoration: none; color: white;">Création de messagerie personnalisée</a></li>
                </ul>
            </div>
        </div>

        <!-- Mentions légales -->
        <div class="text-center mt-4">
            <p>Mentions légales | Politique de confidentialité</p>
            <p>Copyright © 2024 À Crédit Business. Tous droits réservés.</p>
        </div>
        </div>
    </footer>

        <script src="script.js"></script>
</body>
</html>
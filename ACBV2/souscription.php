<?php
session_start();

// Durée d'inactivité en secondes (2 minutes)
$inactive_duration = 120;

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: Formulaire de connexion.php");
    exit();
}

// Vérifiez la dernière activité
if (isset($_SESSION['last_activity'])) {
    if (time() - $_SESSION['last_activity'] > $inactive_duration) {
        // Détruire la session si l'utilisateur est inactif depuis trop longtemps
        session_unset();
        session_destroy();
        header("Location: Formulaire de connexion.php");
        exit();
    }
}

// Mettre à jour le temps de la dernière activité
$_SESSION['last_activity'] = time();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    
    <script>
        // Déconnexion automatique après 2 minutes d'inactivité
        let timeout;
        
        function resetTimer() {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                window.location.href = 'Formulaire de connexion.php'; // Redirige vers la page de connexion
            }, 240000); // 4 minutes
        }
        
        // Écoutez les événements d'activité
        window.onload = resetTimer;
        window.onmousemove = resetTimer;
        window.onkeydown = resetTimer;
    </script>
</head>
<body style="background-color: #ff6500; color: #fff;">

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
            <a href="Formulaire de déconnexion.php"><button class="btn btn-danger">Déconnexion</button></a>
          </div>
        </div>
      </nav><br>


      <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="content-container">
                <div class="dividerWhite"></div>
                    <h1 class="text-center">Souscription</h1>
                    <p class="text-center">Choisissez une option de souscription et remplissez le formulaire ci-dessous.</p>
                    
                    <form>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Numéro de téléphone :</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Entrez votre numéro">
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Montant à recharger :</label>
                            <input type="number" class="form-control" id="amount" placeholder="Entrez le montant">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mode de paiement :</label>
                            <select class="form-select">
                                <option value="orange">Orange Money</option>
                                <option value="mpesa">M-Pesa</option>
                                <option value="visa">Carte Visa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Selectionnez pou voir el tarif :</label>
                            <select class="form-select">
                                <option value="orange">USD</option>
                                <option value="mpesa">CDF</option>
                                <option value="visa">Unité</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Recharger</button>
                    </form>

                    <div class="text-center mt-4">
                        <img src="images/CAROUCEL3.png" alt="Illustration" width="100" height="100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
       
    </footer>

        <script src="script.js"></script>
</body>
</html>
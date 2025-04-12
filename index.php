<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selfcare Application</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>
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
      <section id="rejoindre">
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Pourquoi rejoindre À Crédit Business?</h2>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-3">
                    <div class="education-block">
                        <img src="" alt="">

                        <article id="art1"> 
                          <div class="Overlay">
                              <h4 small="" style="color: #ff6500 ;text-align: left;">Disponibilité:</h4>
                              <p style="color: #ff6500;text-align:left;">Nos unités électroniques sont disponible pour tous les réseaux 24/7.</p> 
                          </div>
                      </article>

                        <div class="divider"></div>
                        <p style="color: #ff6500;text-align: center">Les clients peuvent acheter à tout moment, sans se soucier des horaires d'ouverture. Les transactions peuvent être effectuées depuis chez soi, sans se déplacer. Les commandes sont traitées rapidement, même en dehors des heures de travail habituelles. Les processus automatisés réduisent les délais et les erreurs.</p>
                           
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="education-block">
                      <img src="" alt="">

                      <article id="art2"> 
                        <div class="Overlay">
                            <h4 small="" style="color: #ff6500 ;">Sécurité:</small></h4>
                            <p style="color: #ff6500;text-align:left;">Nous garantissons des transactions en ligne sécurisées.</p> 
                        </div>
                    </article>

                      <div class="divider"></div>
                      <p style="color: #ff6500;text-align: center" >Les données des clients sont protégées contre les accès non autorisés. Les transactions sont sécurisées et minimisent les risques de fraudes et de pertes de données, assurant une expérience d'achat sans tracas.</p>
                         
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="education-block">
                    <img src="" alt="">

                    <article id="art3"> 
                      <div class="Overlay">
                          <h4 small="" style="color: #ff6500 ;">Flexibilité:</small></h4>
                          <p style="color: #ff6500;text-align:left;">Choisissez le mode de paiement qui vous convient le mieux.</p> 
                      </div>
                  </article>

                    <div class="divider"></div>
                    <p style="color: #ff6500;text-align: center">Les clients peuvent choisir le mode de paiement qui leur convient le mieux, que ce soit par carte visa, ou paiement mobile (Mpesa; Orange Money; Airtel Money; AfriMoney).</p>
                       
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="education-block">
                  <img src="" alt="">

                  <article id="art4"> 
                    <div class="Overlay">
                        <h4 small="" style="color: #ff6500 ;">Assistence:</small></h4>
                        <p style="color: #ff6500;text-align:left;">Nos experts, à votre service pour vous assiter.</p> 
                    </div>
                </article>

                  <div class="divider"></div>
                  <p style="color: #ff6500;text-align: center;" >Obtenez des réponses immédiates à vos questions ou préoccupations. Nos agents vous offre des solutions adaptées aux besoins spécifiques de chaque client.</p>
                     
              </div>
          </div>
    </section>

    <section id="recommendations">
      <div class="container-fluid">
        <div class="heading"></div>
        <div id="mycarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators" >
            <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="0" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item" data-bs-interval="5000">
              <img src="images/CAROUCEL3.png" class="d-block w-100 carousel-image" alt="...">
            </div>
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="images/CAPTUREV1.png" class="d-block w-100 carousel-image" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="images/CAROUCEL1.png" class="d-block w-100 carousel-image" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="images/CAP.png" class="d-block w-100 carousel-image" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#mycarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#mycarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    
    <section style="background-color:#333;">
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

    <script>
        document.addEventListener('click', function(event) {
            var navbar = document.getElementById('navbarText');
            var isClickInside = navbar.contains(event.target);

            if (!isClickInside) {
                var navbarToggler = document.querySelector('.navbar-toggler');
                if (navbarToggler.getAttribute('aria-expanded') === 'true') {
                    navbarToggler.click();
                }
            }
        });
    </script>
</body>
</html>


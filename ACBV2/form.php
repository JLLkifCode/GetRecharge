

<!DOCTYPE html>
<html>
    <head>
        <title>Contactez-moi !</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <script src ="js/script.js"></script>

    </head>
    <body>
      <header>
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
    </header>

      <section>
      <main>  
        <div class="container" >
            <div class="divider" ></div>
                <div class="heading">
                    <h2>ECRIVEZ-NOUS</h2>

               </div>
               <div class="row justify-content-center" >
                <div class="col-lg-10">
                    <form id="contact-form" action="" method="post" role="form">
                        <div class="row" >
                            <div class="col-md-6" >
                                <label for="firstname">Prénom <span class="blue" >*</span></label>
                                <input type="text" name="firstname"  class="form-control"  id="firstname" placeholder="Votre prénom" value ="" > 
                                <p class="comments" ></p>

                            </div>
                            <div class="col-md-6" >
                                <label for="nom">Nom <span class="blue" >*</span></label>
                                <input type="text" name="nom"  class="form-control" placeholder="Votre nom" id="nom" value =""> 
                                <p class="comments" ></p>

                            </div>
                            <div class="col-md-6" >
                                <label for="email">Email <span class="blue" >*</span></label>
                                <input type="email" name="email"  class="form-control" placeholder="Votre email" id="email" value =""> 
                                <p class="comments" ></p>

                            </div>
                            <div class="col-md-6" >
                                <label for="telephone">Telephone <span class="blue" >*</span></label>
                                <input type="tel" name="telephone"  class="form-control" placeholder="Votre numéro de telephone" id="telephone" value =""> 
                                <p class="comments" ></p>

                            </div>
                            <div class="col-md-12" >
                                <label for="message">Message <span class="blue" >*</span></label>
                                <textarea name="message"  id="message" class="form-control"  placeholder="Votre message"  rows ="4" ></textarea>
                                
                                <p class="comments" ></p>

                            </div>
                            <div class="col-md-12" id="inforequis">
                                
                                <p class="blue" > <strong> * Ces informations sont requises </strong> </p>

                            </div>
                            <div class="col-md-12" >
                                <input type="submit" class="button1" value="Envoyer">

                            </div>

                        </div>
                        <p class="thank-you" style="display:none" >Votre message a bien été envoyé, merci de m'avoir contacté </p>
                        

                    </form>

                </div>

               </div>

        </div>
    </main> 
    
    </section>  

   
      <footer>
        <div class="container">
          
          <div class="heading">
              
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="education-block">
                      <img src="" alt="">

                      <article > 
           
                      <a href="#" style="text-decoration: none;"> <h4 small="" style="color: white ;">À Crédit Business</h4></a>
 
                    </article>

                     
                      <p></p>
                         
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="education-block">
                      <img src="" alt="">

                      <article > 
           
                      <a href="#" style="text-decoration: none;"> <h4 small="" style="color: white ;">Assistance</h4></a>
                      <ul>
                     <li> <a href="#" style="text-decoration: none;"> <h6 small="" style="color: white ;">FAQs</h6></a></li>
                      <li><a href="#" style="text-decoration: none;"> <h6 small="" style="color: white ;">Nos boutiques</h6></a></li>
                    </ul>
                       
                    </article>

                     
                      <p></p>
                         
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="education-block">
                      <img src="" alt="">

                      <article > 
           
                      <a href="#" style="text-decoration: none;"> <h4 small="" style="color: white ;">Contactez-nous</h4></a>
                      <ul>
                      <li><a href="formulaire/index.php" style="text-decoration: none;"> <h6 small="" style="color: white ;">Nous ecrire</h6></a></li>
                    </ul>
                       
                    </article>

                     
                      <p></p>
                         
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="education-block">
                      <img src="" alt="">

                      <article > 
           
                      <a href="#" style="text-decoration: none;"> <h4 small="" style="color: white ;">Nos autres activités</h4></a>
                    <ul>
                      <li><a href="#" style="text-decoration: none;"> <h6 small="" style="color: white ;">Agence digitale full-stack</h6></a>
                      <p style="color: white ;"><em>Nous permettons aux entreprises de se concentrer sur leur cœur de métier tout en déléguant la gestion technique de leurs présences en ligne à nos experts.</em></p>
                    </li>
                      
                      <ul>
                        <li><a href="#" style="text-decoration: none;"> <h6 small="" style="color: white ;">Développement front-end</h6></a></li>
                        <li><a href="#" style="text-decoration: none;"> <h6 small="" style="color: white ;">Développement back-end</h6></a></li>
                        <li><a href="#" style="text-decoration: none;"> <h6 small="" style="color: white ;">Hébergement web</h6></a></li>
                        <li><a href="#" style="text-decoration: none;"> <h6 small="" style="color: white ;">Création de messagerie avec nom de domaine personnalisé</h6></a></li>
                      </ul>
                      <li><a href="#" style="text-decoration: none;"> <h6 small="" style="color: white ;">Service d'achat personnel en ligne</h6></a>
                      <p style="color: white ;"><em>Ces services aident les clients à trouver, sélectionner et acheter des produits en ligne, nous gérons les détails de la commande, la livraison et même le suivi. Nous offrons également des conseils personnalisés et des recommandations de produits.</em></p>
                    </li>
                     
                    </ul> 
                    </article>

                     
                      <p></p>
                         
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="education-block">
                        <p small="" style="color: white ;">Mentions légales  |  Politique de confidentialité</p>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="education-block">
                      <p small="" style="color: white ;">Copyright © 2024 À Crédit Business. Tous droits réservés.</p>   
                  </div>
              </div>  
          </div>
</footer>

    </body>
</html>
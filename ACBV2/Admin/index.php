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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selfcare Application</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary" id="navbar">
        <div class="container-fluid" style="color:white;background-color:#ff6500;">
          <a class="navbar-brand" href="../index.php"> <img src="../images/JJIREH.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top" style="border-radius: 3px;"> </a>
          <h1 >À Crédit Business</h1>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">SE CONNECTER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">S'ENREGISTRER</a>
              </li>
            </ul>
            <span class="navbar-text">
              
            </span>
          </div>
        </div>
      </nav>

      <section style="background-color: #ff6500;">

      <section id="messageacceuil" style="text-align: center;">
            <div class="container">
                <h6 small class="text-body-secondary" >Souscription :</h6>
                 
                <div style="width: 90%;position: relative;left:5%;"> 
                
                    <p class="text-body-secondary" ><small>Pour souscrire spontannement pour un seul numéro, veuillez cliquer sur souscription individuelle.</small></p>
                    <p class="text-body-secondary" ><small>Pour souscrire pour plusieurs numéros à la fois cliquez sur souscription multiple (adapté pour les entreprises).</small></p>
                    <p class="text-body-secondary" ><small>En souscrivant, commencez par renseigner votre nom (pour les souscription individuelles) ou le nom de l'entreprise (pour les souscriptions multiple), ainsi que votre numéro de contact.</small></p>
                </div>   
            </div>
        </section>

        <section id="avantagedechoix" style="text-align: center;">
            <div class="container">
                <h6 small class="text-body-secondary" >Options de Souscription :</h6>

                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">Souscription Individuelle</label>
                  
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">Souscription Multiple</label>
                
                  </div>
                  <div id="divespace">
                    <p class="text-body-secondary" ><small><em>Veuillez remplir le fourmulaire ci-dessous puis, souscrivez</em></small></p>  
                    </div>
                <form >
                    <section style="border-style: solid; border-color: aliceblue; background-color: rgb(245, 243, 243);width: 90%; position: relative;left: 5%;">
                        
                        <h6 small class="text-body-secondary" ><small>1- Identification</small></h6>

                        <div class="mb-3" style="width: 80%; position: relative;left: 10%;" id="diviform">
                            <label for="exampleFormControlInput1" class="form-label" ><small><small>Identité :</small></small></label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Veuillez saisir votre nom complet svp" >
                        </div>

                        <div class="mb-3" style="width: 80%; position: relative;left: 10%;">
                            <label for="exampleFormControlInput1" class="form-label"><small><small>Numéro de téléphone :</small></small></label>
                            <input type="tel" class="form-control" id="exampleFormControlInput2" placeholder="Entrez votre numéro de contact">
                        </div>

                        <div class="mb-3" style="width: 80%; position: relative;left: 10%;">
                            <label for="exampleFormControlInput1" class="form-label"><small><small>Email address :</small></small></label>
                            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="name@example.com">

                        </div>
            

                    </section>

                    <section style="border-style: solid; border-color: aliceblue; background-color: rgb(245, 243, 243);width: 90%; position: relative;left: 5%">
                        
                        <h6 small class="text-body-secondary"><small>2- Opération</small></h6>
                        
                        <div class="mb-3" style="width: 80%; position: relative;left: 10%;" id="diviform2" >
                            <label for="exampleFormControlInput1" class="form-label"><small><small>Numéro de téléphone à recharger :</small></small></label>
                            <input type="tel" class="form-control" id="exampleFormControlInput4" placeholder="Entrez numéro à recharger">
                        </div>

                        <div class="mb-3" style="width: 80%; position: relative;left: 10%;">
                    
                        </div>

                        <form id="conversionForm">
                        <div id="diviform3">
                            <label for="montant" class="form-label"><small><small>Montant</small></small></label><br>
                            <input id="montant" type="number" name="choix" placeholder="Montant à recharger"><br><br>
                        </div>
                            
                            <label for="input1">USD</label>
                            <input class="radio" id="input1" type="radio" name="choix" value="USD">
                            <label for="input2">CDF</label>
                            <input class="radio" id="input2" type="radio" name="choix" value="CDF">
                            <label for="input3">U</label>
                            <input class="radio" id="input3" type="radio" name="choix" value="U">
                            <p class="buttonvoir" onclick="getSelectedValue(event)" >Voir</p>
                       
                        </form><br><br>
                        <div id="centraliser"><p id="resultat"></p></div><br>
                    </section>

                    <section style="border-style: solid; border-color: aliceblue; background-color: rgb(245, 243, 243);;width: 90%; position: relative;left: 5%">
                        
                        <h6 small class="text-body-secondary"><small>3- Paiement</small></h4>
                       
                        <small><em> Veuillez slectionnez votre mode de paiement :</em></small><br><br>
                        
                        <div id="orange"><input id="choixdev1" type="radio" value="Orange Money" name="Choixpaiement"></div>
                        <div id="Vodacom"> <input id="choixdev2" type="radio" value="Mpesa" name="Choixpaiement"></div>
                        <div id="airtel"><input id="choixdev3" type="radio" value="Airtel Money" name="Choixpaiement"></div>
                        <div id="africel"><input id="choixdev4" type="radio" value="Afri Money" name="Choixpaiement"></div>
                        <div id="Visa" ><input id="choixdev5" type="radio" value="Carte visa" name="Choixpaiement" ></div>
                        <div id="Post" ><input id="choixdev6" type="radio" value="Postpaid" name="Choixpaiement" ></div>
                        <br><br>

                        <div id="afficherresultat" ></div>
                        <br><br>
                    </section>

                    <section style="border-style: solid; border-color: aliceblue; background-color: rgb(245, 243, 243);width: 90%; position: relative;left: 5%">
                    <div >
                       <small><em>Cliquez ci-dessous pour effectuer la recharge :</em></small><br><br>
                    </div>
                        <div style="padding-bottom: 20px;"><input class="radio" id="sub"  type="submit" value="Recharger" onclick="affichage()"></div>
                        
                    </section>
                </form>     

            </div> 
        </section>        
        <script src="Script.js"></script>
    </body>

      </section>


    
    <section style="background-color:#333;">
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
                      <li><a href="#" style="text-decoration: none;"> <h6 small="" style="color: white ;">Nous ecrire</h6></a></li>
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


      
    </section>

    <script src="script.js"></script>
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


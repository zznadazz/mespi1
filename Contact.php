<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma santé - Contact</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
    
    <section class="header">
    </section>

    <section class="menu">
      <nav>
          <a href="http://"> <img src="logomespi.png"style="width: 180px"; height="180px" ></a>
          <div class="search button">
              <img src="search-flat-icon-9.jpg" style="width: 3em; height: 3em">
              <input class="input-elevated" type="text" placeholder="Recherche ..."> 
          </div> 
          <div>
              <ul>
                  <li> <a href="accueil.php">ACCUEIL</a></li>
                  <li> <a href="connexionv3.php">CONNEXION </a></li>
                  <li> <a href="inscriptionv3.php"> INSCRIPTION</a></li>
                  <li> <a href="Contact.php">CONTACT</a></li>
                  <li> <a href="a_propos.php">À PROPOS</a></li>
              </ul>
          </div>
      </nav>
    </section>


    <form method="post" action="contact_traitement.php">

        <fieldset style="border: 1px black; background-color: whitesmoke; width: 60%;  border-radius: 2.5%; border-style: double; margin: auto; padding: 1rem; overflow: hidden;">
            <legend style="background-color: whitesmoke; text-underline-position: below;"><h2>Vos coordonnées: </h2></legend>


            <p style=" background-color: whitesmoke ; margin: auto; padding: auto;">

                <label for="nom" style="background-color: whitesmoke " >Votre nom :</label>
                <input style="margin-bottom: 1.5em; margin-left: 1.5em" type="text" name="nom" id="nom" required />    
                <span class="form-message"></span>

                <br>
                <label for="prenom" style="background-color: whitesmoke " >Votre prénom :</label>
                <input style="margin-bottom: 1.5em" type="text" name="prenom" id="prenom" required />    
                <span class="form-message"></span>

                <br>

                <label for="email" style=" background-color: whitesmoke">Votre mail :</label>
                <input style="margin-bottom: 1.5em; margin-left: 1.6em;" type="email" name="email" id="email" required />
                <span class="form-message"></span>
                
                <br />
                <!--
                <label for="pass" style="background-color: whitesmoke">Votre mot de passe :</label>
                <input style="margin-bottom: 1.5em" type="password" name="pass" id="pass" required />
                -->

            
            </p>   
    
        </fieldset>
       
        <fieldset style=" border: 1px black; background-color: whitesmoke; width: 60%;  border-radius: 2.5%; border-style: double; margin: auto; margin-top: 2em; ; margin-bottom: 2em; padding: 1rem; overflow: hidden;">
            <legend style="background-color: whitesmoke ; text-underline-position: below;"><h2>Votre message: </h2></legend>


            <p style=" background-color: whitesmoke ; margin: auto; padding: auto;">
            <label for="ameliorer">
                <h4 style=" background-color: whitesmoke">Vous pouvez nous envoyer un message</h4>
                </label>
                <br />
                

                <textarea name="ameliorer" id="ameliorer" rows="10" cols="115" style="margin: auto; padding: auto; justify-content: left ; color: gray;">

                Exemple: Bonjour, j'ai un problème avec mon mot de passe. Est-il possible de le récupérer?

                </textarea>       
            </p>

            <input type="submit" value="Envoyer" style="background-color: rgb(44, 84, 193); color: white; height: 3em; width: 6em; margin-top: 2rem; margin-left: 25rem;"/>
        </fieldset>

        
     </form>

     <footer class="footer">
        <div class="grid">
            <div class="grid__row">
                <div class="grid__column-2-4">
                    <h2 class="footer__heading">Notre site</h2>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="a_propos.php" class="footer-item__link">À propos</a>
                        </li>
                        <li class="footer-item">
                            <a href="Contact.php" class="footer-item__link">Contact</a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">Ligne d'assistance 24/7 : 15</a>
                        </li>
                    </ul>
                </div>
                <div class="grid__column-2-4">
                    <h2 class="footer__heading"></h2>
                </div>
                <div class="grid__column-2-4">
                    <h2 class="footer__heading">Mentions légales</h2>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="" class="footer-item__link">Conditions d'utilisation</a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">Politique de confidentialité</a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">Cookies</a>
                        </li>
                    </ul>
                </div>
                <div class="grid__column-2-4">
                    <h2 class="footer__heading"></h2>
                </div>
                <div class="grid__column-2-4">
                    <h2 class="footer__heading">Suivez-nous</h2>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="https://www.facebook.com/profile.php?id=100074862716045" class="footer-item__link" target="_blank">
                                <i class="footer-item__icon fa-brands fa-facebook-square"></i>
                                Facebook
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="https://www.instagram.com/its.episen/" class="footer-item__link" target="_blank">
                                <i class="footer-item__icon fa-brands fa-instagram-square"></i>
                                Instagram
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="https://www.linkedin.com/company/esipe-cr%C3%A9teil-its/" class="footer-item__link" target="_blank">
                                <i class="footer-item__icon fa-brands fa-linkedin"></i>
                                Linkedin
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Adresse EPISEN -->
        <div class="footer__bottom">
            <div class="grid">
                <center>
                    <a href="https://episen.u-pec.fr/formations/technologies-pour-la-sante-its" target="_blank">
                        <img class="footer__img" src="https://episen.u-pec.fr/uas/esipe/LOGO/EPISEN_Logo_WebHeader.svg" alt="EPISEN">
                    </a>
                </center>
                <p class="footer__text">Ingénierie et Technologie pour la Santé<br>
                École Publique d'Ingénieurs de la Santé Et du Numérique (EPISEN) de l’université Paris-Est Créteil (UPEC) <br>
                122, rue Paul Armangot, 94400, Vitry-sur-Seine<br>
                Tél : +33 1 56 72 62 55<br>
                Web : episen@u-pec.fr<br>
                <br>
                © 2022 - Ma santé - Tous droits réservés</p>
            </div>
        </div>
    </footer>
</body>
</html>
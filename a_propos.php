<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma santé - À propos</title>
    <link rel="stylesheet" href="a_propos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
    
    <section class="header">
    </section>

    <section class="menu">
      <nav>
          <a href="accueil.php"> <img src="logomespi.png"style="width: 180px"; height="180px" ></a>
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

    <div class="texte">
        <h2 style="background-color: whitesmoke; text-align: center; vertical-align: bottom; margin-bottom: 1em; margin-top:1em;">À propos </h2> 
        <p style="background-color: whitesmoke; margin-left: 10px;">
        Ma santé est un projet  développé par trois étudiants en Ingénierie et Technologie pour la Santé à l'école Publique d'Ingénieur
        de la Santé et du Numérique (EPISEN) de l'université Paris-Est Créteil (UPEC). <br> 
        <br>
        A travers ce projet, nous espérons améliorer et protéger la santé des personnes âgées. <br> 
        <br>
        Cette mission s'articule autour d'un axe majeur : Gérer les données personnelles et médicales d'une personne âgée.
        </p>
    </div>
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
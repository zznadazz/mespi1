<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="profil_test.css">
    <link rel="stylesheet" href="accueil.css">


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
                  <li> <a href="">MON PROFIL</a></li>
                  <li> <a href="">MES DIAGNOSTIQUES</a></li>
                  <li> <a href="">MES MÉDICAMENTS</a></li>
                  <li> <a href="">MES DONNÉES</a></li>
              </ul>
          </div>
      </nav>
    </section>

    <div class= " ">
    <h1 style="margin: 2em; width: 60%; text-decoration: underline ; font-size: xx-large; "> Mes données personnelles: </h1>
        <?php 
            if(isset($_GET['email'])) {
                $EML=$_GET['email'];
                $conn = mysqli_connect('localhost', 'root', '', 'site_web') or die(mysqli_error($conn));
                $check="SELECT email,Nom,Prenom,adresse,telephone FROM profil ";
                $response=mysqli_query($conn,$check);
                $row = $response->fetch_row();
                $EML2=$row[0];
                while ($row = mysqli_fetch_row($response)) {
                    #printf($row[0]);
                    if ($EML===$row[0]){
                        $NOM = $row[1];
                        $PRE = $row[2];
                        $ADR = $row[3];
                        $TEL = $row[4];
                    }
                }
            }
        ?>
        <div class="esthetics" style=" width: 65%; padding: 3em; height: 10em; background-color: whitesmoke; border: 1px black; border-radius: 2.5%; border-style: double; margin: auto; " >
            <table style="width: 70%; margin: auto; align-items= center;">
                <tr>
                    <td style="height: 1.75em; background-color: #01579b;" > <b style=" background-color: #01579b; color: white; font-size: large; margin-left: 25px"> Nom : </b> </td>
                    <td> <p style="margin-left: 25px"> <?php echo $NOM ?> </p></td>
                </tr>

                <tr>
                    <td style="height: 1.75em; background-color: #01579b;"> <b style=" background-color: #01579b; color: white; font-size: large; margin-left: 25px"> Prénom : </b> </td>
                    <td> <p style="margin-left: 25px"> <?php echo $PRE ?> </p></td>
                </tr>

                <tr>
                    <td style="height: 1.75em; background-color: #01579b;"> <b style=" background-color: #01579b; color: white; font-size: large; margin-left: 25px"> Email : </b> </td>
                    <td> <p style="margin-left: 25px"> <?php echo $EML ?> </p></td>
                </tr>

                <tr>
                    <td style="height: 1.75em; background-color: #01579b;"> <b style=" background-color: #01579b; color: white; font-size: large; margin-left: 25px"> Adresse : </b> </td>
                    <td> <p style="margin-left: 25px"> <?php echo $ADR ?> </p></td>
                </tr>

                <tr>
                    <td style="height: 1.75em; background-color: #01579b;"> <b style=" background-color: #01579b; color: white; font-size: large; margin-left: 25px"> Tel : </b> </td>
                    <td> <p style="margin-left: 25px"> <?php echo $TEL ?>  </p></td>
                </tr>
                

            </table>
        </div>

                    
    </div>  
    
    <a href="profil_modif.php?email=<?php echo $EML?>" class="" >
        <button style="margin-left: 40em ; margin-top: 1.5em; margin-bottom: 2em; background-color: #01579b; color: white; border: none; border-radius: 2px; cursor: pointer; padding: 15px 15px; align-items: center" class="btn btn--primary">Modifier</button>
    </a>
    <a href="accueil.php" class="" >
        <button style="margin-left: 39em ; margin-top: 1.5em; margin-bottom: 2em; background-color: #01579b; color: white; border: none; border-radius: 2px; cursor: pointer; padding: 15px 15px; align-items: center" class="btn btn--primary">Déconnexion</button>
    </a>

    <!-- Footer -->
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

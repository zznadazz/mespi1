<?php
session_start();


$conn = mysqli_connect('localhost', 'root', '', 'site_web') or die(mysqli_error($conn));


if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) 
    && isset($_POST['pwd']) && isset($_POST['Cpwd'])) {
    $NOM = $_POST['nom'];
    $PRE = $_POST['prenom'];
    $EML = $_POST['email'];
    $PWD = $_POST['pwd'];
    $INSreq = "INSERT INTO profil (Nom,Prenom,email,password) values ('$NOM','$PRE','$EML','$PWD')";
}

$INSres = mysqli_query($conn, $INSreq);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="profil_test.css">
    <link rel="stylesheet" href="/web_service/fontawesome-free-6.1.1-web/css/all.css">
</head> <link rel="stylesheet" href="profil_test.css">

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
                  <li> <a href="">Mon profil</a></li>
                  <li> <a href="">Mes diagnostiques</a></li>
                  <li> <a href="">Mes médicaments</a></li>
                  <li> <a href="">Mes données</a></li>
              </ul>
          </div>
      </nav>
    </section>

    <!-- le code -->

    <div class= " ">
    <h1> Mes données personnelles</h1>

    <table>
        <tr>
            <td> <b> Nom: </b> </td>
            <td> <?php echo $row [0] ?> </td>
        </tr>

        <tr>
            <td> <b> Prénom: </b> </td>
            <td> <?php echo $PRE ?> </td>
        </tr>

        <tr>
            <td> <b> Email: </b> </td>
            <td> <?php echo $EML ?> </td>
        </tr>

        <tr>
            <td> <b> Adresse: </b> </td>
            <td> <input type="text"> </td>
        </tr>

        <tr>
            <td> <b> Tel: </b> </td>
            <td> <input id="phone" type="tel" name="tel"></td>
        </tr>

    </table>
    <input href='profil_modif.php' type="submit" value="Envoyer" style="background-color: rgb(44, 84, 193); color: white; height: 3em; width: 6em; margin-top: 2rem; margin-left: 22rem;"/>
    </div>

</body>
</html>

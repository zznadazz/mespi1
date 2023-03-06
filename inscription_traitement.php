<?php
session_start();


$conn = mysqli_connect('localhost', 'root', '', 'site_web') or die(mysqli_error($conn));


if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) 
    && isset($_POST['pwd']) && isset($_POST['Cpwd'])) {
    $NOM = $_POST['nom'];
    $PRE = $_POST['prenom'];
    $EML = $_POST['email'];
    $PWD = $_POST['pwd'];
    $CPWD = $_POST['Cpwd'];
    $EMLcheck=0;

    $check="SELECT email,Nom FROM profil";
    $response=mysqli_query($conn,$check);
    $row = $response->fetch_row();
    while ($row = mysqli_fetch_row($response)) {
        printf($row[0], $row[1]);
        if ($row[0]===$EML){
            $EMLcheck=1;
        }
    }

    if($EMLcheck===0){ 
        if(strlen($NOM) <= 100){ // On verifie que la longueur du pseudo <= 100
            if(strlen($PRE) <= 100){ // On verifie que la longueur du pseudo <= 100
                if(strlen($EML) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($EML, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($PWD === $CPWD){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            $cost = ['cost' => 12];
                            $PWD = password_hash($PWD, PASSWORD_BCRYPT, $cost);
                            
                            // On stock l'adresse IP
                            $ip = $_SERVER['REMOTE_ADDR']; 
                            /*
                            ATTENTION
                            Verifiez bien que le champs token est présent dans votre table utilisateurs, il a été rajouté APRÈS la vidéo
                            le .sql est dispo pensez à l'importer ! 
                            ATTENTION
                            */
                            // On insère dans la base de données
                            $INSreq = "INSERT INTO profil (Nom,Prenom,email,password) values ('$NOM','$PRE','$EML','$PWD')";

                            $INSres = mysqli_query($conn, $INSreq);
                            // On redirige avec le message de succès
                            header("Location:profil_test.php?email=$EML");
                            
                        }else{ header('Location: inscriptionv3.php?reg_err=password'); die();}
                    }else{ header('Location: inscriptionv3.php?reg_err=email'); die();}
                }else{ header('Location: inscriptionv3.php?reg_err=email_length'); die();}
            }else{ header('Location: inscriptionv3.php?reg_err=prenom_length'); die();}
        }else{ header('Location: inscriptionv3.php?reg_err=nom_length'); die();}
    }else{ header('Location: inscriptionv3.php?reg_err=already'); die();}
    }
    

?>

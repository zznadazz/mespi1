<?php
session_start();


$conn = mysqli_connect('localhost', 'root', '', 'site_web') or die(mysqli_error($conn));


if (isset($_POST['email'])) {
    $NOM = $_POST['nom'];
    $PRE = $_POST['prenom'];
    $EML = $_POST['email'];
    $ADR = $_POST['adresse'];
    $TEL = $_POST['tel'];
    $EMLcheck=0;

    $check="SELECT email,nom FROM profil";
    $response=mysqli_query($conn,$check);
    $row = $response->fetch_row();
    while ($row = mysqli_fetch_row($response)) {
        printf($row[0], $row[1]);
        if ($row[0]===$EML){
            $EMLcheck=1;
        }
    }

    if($EMLcheck===0){ 
        // On hash le mot de passe avec Bcrypt, via un coût de 12
                     
        // On insère dans la base de données
        $MODreq = "UPDATE profil SET Nom=$NOM, Prenom=$PRE, email$EML, adresse=$ADR, telephone=$TEL WHERE email=$EML";

        $MODres = mysqli_query($conn, $MODreq);
        echo "Modifier";
        // On redirige avec le message de succès
        header("Location:profil_test.php?email=$EML");
    }else{ header('Location: inscription.php?reg_err=already'); die();}
    }
?>



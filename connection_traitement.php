<?php
session_start();


$conn = mysqli_connect('localhost', 'root', '', 'site_web') or die(mysqli_error($conn));


if (isset($_POST['email']) && isset($_POST['pwd'])) {
    $EML = $_POST['email'];
    $PWD = $_POST['pwd'];
    $EMLcheck=0;
    $PWDcheck=0; 

    $check="SELECT email,password FROM profil";
    $response=mysqli_query($conn,$check);
    $row = $response->fetch_row();
    printf($EML);
    while ($row = mysqli_fetch_row($response)) {
        printf($row[0]);
        if ($EML===$row[0]){
            $EMLcheck=1;
            if(password_verify($PWD,$row[1])){
                $PWDcheck=1;
            }
        }
    }

    if($EMLcheck==1){ 
        if($PWDcheck==1){
            header("Location:profil_test.php?email=$EML");
        }else{ header('Location: connexionv3.php?reg_err=falsepwd');die();}
    }else{ header('Location: connexionv3.php?reg_err=uncreated'); die();}
    }
    

?>
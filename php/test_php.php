

<?php

$dbh = new PDO('mysql:host=localhost;dbname=test1',"mespi","123456789");

$req = "INSERT INTO profil (ID,nom,prenom,email,password) VALUES('2','renier','theo','theo.renier@sfr.fr','987654321')";
$dbh->query($req);
  

$req1 = $dbh->query(" SELECT ID FROM profil ");
 
    while ($r = mysqli_fetch_array($req1))  {
    echo $r['ID'];
  }

?>
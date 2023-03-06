
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <h1>Message bien reçu!</h1>

    <div class= "donnees">
        <h5>Rappel de vos données</h5>
        <p class="card-text"><b>Message</b> : <?php echo $_POST['ameliorer']; ?></p>    
        <p class= "card-text"><b>Email</b> : <?php echo $_POST['email']; ?></p>
    </div>

    <?php
if (
    (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    || (!isset($_POST['message']) || empty($_POST['message']))
    )
{
	echo('Il faut un email et un message valides pour soumettre le formulaire.');
    return;
}
?>
</body>
</html>
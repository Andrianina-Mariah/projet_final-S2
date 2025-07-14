<?php
require_once("../inc/fonction.php");
$mail =$_SESSION['email'] ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Final exam</title>
</head>
<body>
    <header>
        <h1>Bienvenue</h1>
    </header>
    <section>
        <article>
            <form action="../inc/traitement_login.php" method="POST">
                <p>Votre email <input type="email" name="email" placeholder="email..."/></p>
                <p>Mots de passe <input type="password" name="mdp" placeholder="mots de passe"/></p>
                <input type="submit" value="Se connecter" />    
                <p>Pas de compte <a href="inscription.php">Inscrivez-vous.</a></p>
        </form>
            </form>
        </article>
    </section>
</body>
</html>
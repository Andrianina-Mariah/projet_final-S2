<?php 
require_once("../inc/fonction.php");
$mail =$_SESSION['email'] ;
$donne = get_membre($mail);
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>Profil emprunt</title>
</head>
<body>

<h1>Profil d'utilisateur</h1>
  <div class="header">
      <div class="username">
        <p>Nom: <?php echo $donne['nom'] ; ?></p>
        <p>Date de naissance: <?php echo $donne['date_de_naissance'] ; ?></p>
        <p>Ville: <?php echo $donne['ville'] ; ?></p>
        <p>Email: <?php echo $donne['email'] ; ?></p>

    </div>
  </div>
<h3>Objet emprunter</h3>
</body>
</html>
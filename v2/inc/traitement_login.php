<?php 
require_once("fonction.php");
$mdp= $_POST['mdp'];
$mail= $_POST['email'];
$bdd = dbconnect();
$msql = sprintf("select email,mdp,id_membre from emprunt_membre where email = '%s'and mdp = '%s'",$mail,$mdp);
$sql = mysqli_query($bdd , $msql);


if (mysqli_num_rows($sql) > 0)
{ 
    $_SESSION['email'] = $mail;
    header ('Location: ../pages/accueil.php' );
    exit();
}
else
{
    header ('Location: ../pages/index.php?error=1');
    exit();
}


?>
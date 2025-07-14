<?php
require_once("fonction.php");

 echo $name = $_POST['name'];
 echo $mdp = $_POST['mdp'];
echo $mail = $_POST['email'];
echo $dtn=$_POST['dtn'];
echo $genre = $_POST['genre'];
echo $ville=$_POST['ville'];

/$bdd =  dbconnect();

$sql=sprintf("INSERT INTO  emprunt_membre (nom,date_de_naissance,genre, email, ville, mdp, image_profil)
 Values ('$name', '$dtn', '$genre','$mail','$ville','$mdp')");
$result = mysqli_query($bdd, $sql);*/


//header ('Location: ../pages/index.php');
?>
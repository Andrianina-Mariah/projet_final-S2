<?php
require_once("fonction.php");

$name = $_POST['name'];
$mdp = $_POST['mdp'];
$mail = $_POST['email'];
$dtn=$_POST['dtn'];
$genre = $_POST['genre'];
$ville=$_POST['ville'];

$bdd =  dbconnect();

$sql=sprintf("INSERT INTO  emprunt_membre (nom,date_de_naissance,genre, email, ville, mdp, image_profil)
 Values ('$name', '$dtn', '$genre','$mail','$ville','$mdp','../assets/bootstrap-icons/icons/person-fill.svg')");
echo $sql;
$result = mysqli_query($bdd, $sql);


header ('Location: ../pages/index.php');
?>
<?php
require_once("../inc/fonction.php");
echo $id_m=$_POST['idm'];
echo $id_o=$_POST['ido'];
echo $date = $_POST['date'];
//echo $date_e=currentDate;


$bdd =  dbconnect();
$sql=sprintf("INSERT INTO  emprunt_emprunt (id_objet,id_membre,date_emprunt, date_retour)
 Values ('$id_o', '$id_m', '$date_e','$date')");
echo $sql;
$result = mysqli_query($bdd, $sql);

?>
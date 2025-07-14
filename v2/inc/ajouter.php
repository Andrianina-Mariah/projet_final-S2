<?php

$uploadDir = realpath(__DIR__ . '/../assets/images/');
$maxSize = 15 * 1024 * 1024; 
$allowedMimeTypes = [ 'image/jpeg', 'image/png'];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['media'])) {
    $file = $_FILES['media'];
    if ($file['error'] !== UPLOAD_ERR_OK) {
        die('Erreur lors de l’upload : ' . $file['error']);
    }
    if ($file['size'] > $maxSize) {
        die('Le fichier est trop volumineux.');
    }
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $file['tmp_name']);
    finfo_close($finfo);
    if (!in_array($mime, $allowedMimeTypes)) {
        die('Type de fichier non autorisé : ' . $mime);
    }
    $originalName = pathinfo($file['name'], PATHINFO_FILENAME);
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $extension=strtolower($extension);
    $files = glob($uploadDir . '/video_*.' . $extension);
    $nextIndex = count($files) + 1;
    $newName = 'video_' . $nextIndex . '.' . $extension;
    $destination=$uploadDir . '/' . $newName;
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        echo "Fichier uploadé avec succès : " . $newName;

    } else {
        echo "Échec du déplacement du fichier. Erreur : " . print_r(error_get_last(), true);
    }
} else {
    echo "Aucun fichier reçu.";
}


require_once("fonction.php");
$bdd =  dbconnect();

echo $id =$_POST['id'] ;
$name_file =  $_POST ['name'];
$cat = $_POST['genre'];


$sql=sprintf("INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre)
 Values ('$name_file', '$cat','$id')");
 echo $sql;
$result = mysqli_query($bdd, $sql);
header ('Location: ../pages/accueil.php');


?>
<?php

$uploadDir = realpath(__DIR__ . '/../assets/images/');
$maxSize = 15 * 1024 * 1024; 
$allowedMimeTypes = ['image/jpeg', 'image/png'];
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
    $files = glob($uploadDir . '/image_*.' . $extension);
    $nextIndex = count($files) + 1;
    echo $newName = 'image_' . $nextIndex . '.' . $extension;
    if (move_uploaded_file($file['tmp_name'], $uploadDir . '/' . $newName)) {
        echo $uploadDir . '/' . $newName;
        echo "Fichier uploadé avec succès : " . $newName;
    } else {
        echo "Échec du déplacement du fichier. Erreur : " . print_r(error_get_last(), true);
    }
} else {
    echo "Aucun fichier reçu.";
}


require_once("fonction.php");
$bdd =  dbconnect();

$mail =$_SESSION['Email'] ;
$name_file =  $newName ;


$sql=sprintf("INSERT INTO  insta_post (Email_posteur, link_img, caption)
 Values ('$mail', '$name_file','$cap')");
$result = mysqli_query($bdd, $sql);
 header ('Location: ../pages/publier.php');
"../assets/bootstrap-icons/icons/person-fill.svg"

?>
<?php
require_once("../inc/fonction.php");
$member=$_POST['id'];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylsheet" href="../assets/css/style.css">
  <title>ajout objet
   </title>
</head>
<body>
  <div class="main">
    <div class="feed">
      <h2>Ajouter un objet</h2>

      <form action="../inc/ajouter.php" method="POST" enctype="multipart/form-data">
        <label for="media">Sélectionnez une image de l'objet</label>
        <input type="file" id="media" name="media" accept="image/*" required>
        <input type="hidden" name="id" value="<?= $member; ?>">
        <label for="description">nom de l'objet:</label>
        <textarea id="description" name="name" rows="4" placeholder="Le nom de l'objet ajouter"></textarea>
        categorie<select name="genre">
                    <option value="">-- Choisissez une categorie --</option>
                    <option value="1">Esthetique</option>
                    <option value="2">Bricolage</option>
                    <option value="3">Mecanique</option>
                    <option value="4">Cuisine</option>
                </select>
        <button type="submit">Ajouter</button>
      </form>
    </div>
  </div>
      <a href="accueil.php" class="btn btn-link">Retour à l'accueil</a>
</body>
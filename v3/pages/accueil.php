<?php
require_once("../inc/fonction.php");
$mail = $_SESSION['email'] ;
$member=get_membre($mail);

$listeCategorie = get_categ();

if (isset($_GET['cat']) && $_GET['cat'] != "") {
    $cat = $_GET['cat'];
    $resultat = filtre_cat($cat);
} else {
    $cat = ""; 
    $resultat = get_objet();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final exam</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h1>Bienvenue <?php echo $member['nom'];?></h1>
                <div class="collapse navbar-collapse">
                    <form action="accueil.php" method="get" class="modern-form d-flex align-items-center">
                        <div class="form-group me-3">
                            <label for="categorie">Filtre de catégorie :</label>
                            <select name="cat" id="categorie" class="form-select">
                                <option value="">Tous</option>
                                <?php foreach ($listeCategorie as $lc): ?>
                                    <option value="<?= htmlspecialchars($lc['id_categorie']) ?>"
                                        <?= ($cat == $lc['id_categorie']) ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($lc['nom_categorie']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Filtrer</button>
                    </form>
                    <form action="../inc/traitement_deconnexion.php" method="post" >
                        <button type="submit">Deconnection</button>
                    </form>
                    <form action="ajoutObjet.php" method="post" >
                        <input type="hidden" value="<?php echo $member['id_membre']; ?>" name="id">
                        <button type="submit">Ajouter objet</button>
                    </form>
                    <form action="profil.php" method = "post">
                        <input type="hidden" value="<?php echo $member['id_membre']; ?>" name="id">
                        <button type="submit">Profil</button>
                    </form>
      
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <article class="liste_obj">
            <table class="table table-striped centered-table">
                <thead>
                    <tr>
                        <th>Option</th>
                        <th>Nom objet</th>
                        <th>Date de retour</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($donnees = mysqli_fetch_assoc($resultat)): ?>
                        <tr>
                            <td>
                                <form action="emprunt.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="id_o" value="<?= $donnees['id_objet'];?>">
                                    <input type="hidden" name="id_m" value="<?= $donnees['id_membre'];?>">
                               <button type="submit" style="background: none; border: none; color: blue; text-decoration: underline; cursor: pointer;"> 
                               emprunter
                               </button>
                                 </form>
                                </td> 
                    <form action="fiche.php" method="post">
                        <td scope="row">
                            <input type="hidden" name="id" value="<?php echo $donnees['id_objet']; ?>">
                            <button type="submit" style="background: none; border: none; color: blue; text-decoration: underline; cursor: pointer;">
                                 <?=htmlspecialchars($donnees['nom_objet']); ?>
                        </button>
                        </td>
                    </form>

                            <td><?= htmlspecialchars($donnees['date_retour']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </article>
    </main>
</body>
</html>

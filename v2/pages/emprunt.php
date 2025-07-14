<?php
require_once("../inc/fonction.php");
 $id_m=$_POST['id_m'];
$id_o=$_POST['id_o'];
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
                <h1>Bienvenue </h1>
                    <form action="../inc/traitement_deconnexion.php" method="post" >
                        <button type="submit">Deconnection</button>
                    </form>
                     <form action="accueil.php" method="post" >
                        <button type="submit">Accueil</button>
                    </form>
                    <form action="ajoutObjet.php" method="post" >
                        <input type="hidden" value="<?php echo $member['id_membre']; ?>" name="id">
                        <button type="submit">Ajouter objet</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
      <article class="information">
             <h1> Duré de l'emprunt</h1>
             <form action="../inc/traitement_emprunt.php" method="post">
                  <p>date de retour <input type="date" name="date" placeholder="date de retour"/></p>
                  <input type="hidden" value="<?php echo $id_m; ?>" name="idm">
                     <input type="hidden" value="<?php echo $id_o; ?>" name="ido">
                <input type="submit" value="Valider" />   
             </form>
      </article>
    </main>
</body>
</html>
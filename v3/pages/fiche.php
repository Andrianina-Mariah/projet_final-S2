<?php 
require_once("../inc/fonction.php"); 
$id=$_POST['id'];
$resultat=get_one_objet($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>fiche objet</title>

</head>
<body>

<main>
     <div class="container">
            <div class="row justify-content-md-center">
    <section  class="col-sm-12 col-lg-8 bloc py-5">
        <article>
            <p class="text-info-emphasis"> Fiche de l'objet</p>
              <?php 


     while ($donnees = mysqli_fetch_assoc($resultat)) { ?>


                      <table class="table table-striped centered-table">
                    <th scope="col">numero</th>
                    <th scope="col">nom</th>
                    <th scope="col">categorie</th>
                     <th scope="col">membre</th>

                    <tr>
                    <td scope="row"><?php echo $donnees['id_objet']; ?></td>
                    <td scope="row"><?php echo $donnees['nom_objet']; ?></td>
                    <td scope="row"><?php echo $donnees['nom_categorie']; ?></td>
                    <td scope="row"><?php echo $donnees['nom']; ?></td>
     </tr>               
     </table>


       <?php } ?>

     </article>

     </section>
       
     </div>
     </div>
</main>
          <a href="accueil.php" class="btn btn-link">Retour à l'accueil</a>
</body>
</html>
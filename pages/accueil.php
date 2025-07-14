<?php
require_once("../inc/fonction.php");
$mail =$_SESSION['email'] ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Final exam</title>
</head>
<body>
    <header>
        <h1>Bienvenue</h1>
    </header>
    <section>
        <article class="liste_obj">
        
            <table class="table table-striped centered-table">
                            <thead>
                                <tr>
                                    <th scope="col">Nom objet</th>
                                    <th scope="col">date de retour</th>
                                </tr>
                            </thead>
                            <body>
                                <?php 
                                $resultat = get_objet();
                                while ($donnees = mysqli_fetch_assoc($resultat)) { ?>
                                    <tr>
                                        <td scope="row"><?php echo $donnees['nom_objet']; ?></td>
                                        <td scope="row"><?php echo $donnees['date_retour']; ?></td>      
                
                                    </tr>
                                      <?php } ?>
                           
                            </body>
                        </table>

           

        </article>
    </section>
</body>
</html>
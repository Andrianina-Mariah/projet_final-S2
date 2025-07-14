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
        <h1>Login</h1>
    </header>
    <section class="row justify-content-md-center" >
        <article class="col-sm-12 col-lg-8 bloc py-5">
            <form action="../inc/traitement-inscription.php" method="POST">
                <p>Votre email<input type="email" name="email" placeholder="email..."/></p>
                <p>Nom<input type="text" name="name" placeholder="nom..."/></p>
                <p>Date de naissance<input type="date" name="dtn" placeholder="date de naissance..."/></p>
                <p>Ville<input type="text" name="ville" placeholder="ville"/></p>
                <p>Genre<select name="genre">
                    <option value="">-- Choisissez un genre --</option>
                    <option value="M">Homme</option>
                    <option value="F">Femme</option>
                </select></p>
                <p>Mots de passe <input type="password" name="mdp" placeholder="mots de passe"/></p>
                      <!-- <form action="../inc/traitement-photo.php" method="POST" enctype="multipart/form-data">
                        <label for="media">Sélectionnez votre photo :</label>
                        <input type="file" id="media" name="media" accept="image/*" required>
                        <button type="submit">Sélectionner</button>
                    </form>   -->
                <input type="submit" value="Se connecter" />  
                <br>
                <p>Pas de compte <a href="inscription.php">Inscrivez-vous.</a></p>
        </form>
            </form>
        </article>
    </section>
</body>
</html>
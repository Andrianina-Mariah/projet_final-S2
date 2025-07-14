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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <img src="../assets/bootstrap-icons/icons/robot.svg" alt="Bootstrap" width="30" height="24">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
</div>
  </div>
</nav>

</header>
    <section class="row justify-content-md-center" >

        <article class="col-sm-12 col-lg-8 bloc py-5">
            <h1>Connexion</h1>
            <form action="../inc/traitement_login.php" method="POST">
                <p>Votre email  <input type="email" name="email" placeholder="email"/></p>
                <p>Mots de passe  <input type="password" name="mdp" placeholder="mots de passe"/></p>
                <input type="submit" value="Se connecter" />    
                <p>Pas de compte <a href="inscription.php">Inscrivez-vous.</a></p>
        </form>
            </form>
        </article>
    </section>
</body>
</html>
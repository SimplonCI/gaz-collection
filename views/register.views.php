<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Inscription</title>
  </head>
  <body>
      <?php include 'views/errors.views.php'; ?>
      <div class="card">
          <h2 class="title">Inscription</h2>
          <form class="login" action="register.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Nom" name="nom" value="<?php echo $nom ?>" id="nom"> <br> <br>
            <input type="text" placeholder="Prenom" name="prenom" value="<?php echo $prenom ?>" id="prenom"> <br> <br>
            <input type="email" placeholder="Email" name="email" value="<?php echo $email ?>" id="email"> <br> <br>
            <input type="tel" placeholder="Telephone" name="telephone" value="<?php echo $telephone ?>" id="telephone"> <br> <br>
            <input type="password" placeholder="Mot de passe" name="password" value="" id="password"> <br> <br>
            <input type="password" placeholder="Confirmer le mot de passe" name="passwordconfirm" value="" id="passwordconfirm"> <br> <br>
            Photo de profil <input type="file" name="fileUpload" id="fileUpload"> <br> <br>
            <button type="submit" name="registration">Je m'inscris</button> <br><br>

          </form>
          <p>J'ai deja un compte <a href="login.php">connexion</a> </p>
      </div>
  </body>
</html>

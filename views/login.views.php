<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
  </head>
  <body>
      <?php include 'views/errors.views.php'; ?>
      <div class="card">
          <h2 class="title">Login</h2>
          <form class="login" action="login.php" method="post">
            <input type="text" placeholder="email ou telephone" name="username" value="<?php echo $username ?>" id="username"> <br> <br>
            <input type="password" placeholder="mot de passe" name="password" value="" id="password"> <br> <br>
            <button type="submit" name="login">Connexion</button> <br><br>
          </form>

          <p>C'est votre premiere fois ici ? <a href="register.php">creer un compte</a> </p>
      </div>
  </body>
</html>

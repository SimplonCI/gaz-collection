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
          <?php if ($find): ?>
            <h2 class="title">Modifier mon profile</h2>
            <form class="login" action="profile.php" method="post">
               <input type="hidden" id="custId" name="id" value="<?php echo $rows['id']?>">
              <input type="text" placeholder="Nom" name="nom" value="<?php echo $rows['nom']?>" id="nom"> <br> <br>
              <input type="text" placeholder="Prenom" name="prenom" value="<?php echo $rows['prenom'] ?>" id="prenom"> <br> <br>
              <input type="email" placeholder="Email" name="email" value="<?php echo $rows['email'] ?>" id="email"> <br> <br>
              <input type="tel" placeholder="Telephone" name="telephone" value="<?php echo $rows['telephone'] ?>" id="telephone"> <br> <br>
              <button type="submit" name="update">mise a jour de mes informations</button> <br><br>

            </form>
            <p>J'ai deja un compte <a href="login.php">connexion</a> </p>
          <?php else: ?>
              <h2>Oups !!!</h2>
          <?php endif; ?>

      </div>
  </body>
</html>

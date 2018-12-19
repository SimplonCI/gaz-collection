<?php
  session_start();
  include 'config/database.php';

  $username = '';
  $password = '';
  $errors = array();


  if (isset($_POST['login'])) {
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);

    // validation du fomulaire
    if(empty($username)){
      array_push($errors, "L'Adresse email ou le telephone est obligatoire");
    }

    if (empty($password)) {
      array_push($errors, "Le mot de passe est obligatoire");
    }


    // verification s'il n'y a pas d'erreur

    if (count($errors)==0) {
      // cryptage du mot de passe
      $password = md5($password);
      // verification si l'utilisateur a un compte
      // requete
      $query = "SELECT * FROM users WHERE email='$username' or telephone='$username' AND password='$password' LIMIT 1";
      // execution de la requete
      $results = mysqli_query($db,$query);

      // voir l'etats de requete

      if (mysqli_num_rows($results) == 1) {
        // stocker le retour de la requete dans un tableau
        $array = $results -> fetch_assoc();
        $_SESSION['logged_in'] = true;
        $_SESSION['logged_id'] = $array['id'];
        $_SESSION['username'] = $array['email'];
        $_SESSION['nom'] = $array['nom'];
        $_SESSION['prenom'] = $array['prenom'];
        $_SESSION['profile'] = $array['image'];



        // redirection de l'utilisateur
         echo '<script language="Javascript">';
         echo 'document.location.replace("./index.php")'; // -->
         echo ' </script>';
      } else {
        array_push($errors, "Erreur , la combinaison du login et du mot de passe incorrect");
      }
    }
    mysqli_close($db);
  }

?>


<?php include 'views/login.views.php'; ?>

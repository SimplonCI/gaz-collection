<?php
  include '../config/database.php';
  
  $password = md5($password);
  // verification si l'utilisateur a un compte
  // requete
  $query = "SELECT * FROM gerant WHERE email='$username' AND password='$password' LIMIT 1";
  // execution de la requete
  $results = mysqli_query($db,$query);

  // voir l'etats de requete

  if (mysqli_num_rows($results) == 1) {
    // stocker le retour de la requete dans un tableau
    $array = $results -> fetch_assoc();
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $array['email'];
    $_SESSION['nom'] = $array['nom'];
    $_SESSION['prenom'] = $array['prenom'];

    mysqli_close($db);

    echo $_SESSION['username'];
  }

?>

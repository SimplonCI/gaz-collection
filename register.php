<?php
  session_start();
  include 'config/database.php';
  // declaration des variables
  $nom = '';
  $prenom = '';
  $email = '';
  $telephone = '';
  $password = '';
  $passwordconfirm = '';

  // tableau d'erreur
  $errors = array();

  // quand le formulaire est soumis
  if (isset($_POST['registration'])) {
    $nom = addslashes($_POST['nom']);
    $prenom = addslashes($_POST['prenom']);
    $email = addslashes($_POST['email']);
    $telephone = addslashes($_POST['telephone']);
    $password = $_POST['telephone'];
    $passwordconfirm = $_POST['telephone'];

    // validation du formulaire
    if (empty($nom)) {
      array_push($errors,"Le champ nom est obligatoire");
    }
    if (empty($prenom)) {
      array_push($errors,"Le champ prenom est obligatoire");
    }
    if (empty($email)) {
      array_push($errors,"Le champ email est obligatoire");
    }
    if (empty($telephone)) {
      array_push($errors,"Le champ telephone est obligatoire");
    }
    if (empty($password)) {
      array_push($errors,"Le mot de passe est obligatoire");
    }
    if (empty($passwordconfirm)) {
      array_push($errors,"La confirmation du mot de passe est obligatoire");
    }

    if ($password != $passwordconfirm) {
      array_push($errors,"Les deux mot de passe ne concorde pas");
    }


    // verification si l'utlisateur a deja un compte
    // requete
    $user_check_query = "SELECT * FROM users WHERE email='$email' OR telephone='$telephone' LIMIT 1";
    // execution de la requete
    $user_check_result = mysqli_query($db,$user_check_query);
    // recuperation du retour de la requete
    $user = mysqli_fetch_assoc($user_check_result);

    if ($user) {
      // si l'adresse est existe deja
      if ($user['email']===$email) {
        array_push($errors,"L'adresse email est deja utilise");
      }
      // si le numero de telephone est existe deja
      if ($user['telephone']===$telephone) {
        array_push($errors,"Le numero de telephone est deja utilise");
      }
    }


    // verification du tableau d'erreur
    if (count($errors) == 0) {
      //cryptage du mot de passe
      $password = md5($password);
      // requete
      $query = '';
      // execution de la requete
      mysqli_query($db,"INSERT INTO users (nom,prenom,email,telephone,password,date_create) VALUES ('$nom','$prenom','$email','$telephone','$password','$datepost')");
      // close database
      mysqli_close($db);
      // redirection
      header('location: login.php');
    }
  }
?>


<?php include 'views/register.views.php'; ?>

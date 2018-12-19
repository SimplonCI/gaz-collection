<?php
  session_start();

    //  voir si l'utilisateur est connecte
    if (!isset($_SESSION['logged_in'])) {
      // redirection de l'utilisateur
       echo '<script language="Javascript">';
       echo 'document.location.replace("./login.php")'; // -->
       echo ' </script>';
    }

  include 'config/database.php';

  $find = false;
  $identifiant = 0;
  // recuperation des informations du l'utlisateur
  if (isset($_GET['id'])) {
    $id = addslashes($_GET['id']);
    $identifiant = $id;
    // requette
    $query = "SELECT * FROM users WHERE id='$id'";
    // execution de la requete
    $results = mysqli_query($db,$query);



    if (mysqli_num_rows($results)) {
      // stocker le retour de la requete dans un tableau
      $rows = $results -> fetch_assoc();
      $find = true;

    } else {
      // // redirection de l'utilisateur
      //  echo '<script language="Javascript">';
      //  echo 'document.location.replace("./login.php")'; // -->
      //  echo ' </script>';
    }
  }


  // declaration des variables
  $nom = '';
  $prenom = '';
  $email = '';
  $telephone = '';


  // tableau d'erreur
  $errors = array();
  echo $identifiant;
  // quand le formulaire est soumis
  if (isset($_POST['update'])) {
    $id = addslashes($_POST['id']);
    $nom = addslashes($_POST['nom']);
    $prenom = addslashes($_POST['prenom']);
    $email = addslashes($_POST['email']);
    $telephone = addslashes($_POST['telephone']);


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






    // verification du tableau d'erreur
    if (count($errors) == 0) {
      //cryptage du mot de passe
      $password = md5($password);

      $picture = '';
      $image_path = $_FILES["fileUpload"]["tmp_name"]; //this will be the physical path of your image
      // $name_image = $_FILES['fileUpload']['name'];
      if($image_path!=""){
         $img_binary = fread(fopen($image_path, "r"), filesize($image_path));
         $picture = base64_encode($img_binary);
       } else {
         $picture = $rows['image'];
       }
      // requete
      $query = "UPDATE users SET nom='$nom', prenom='$prenom', email='$email', telephone='$telephone', image='$picture' WHERE id='$id'";
      // execution de la requete
      mysqli_query($db,$query);

      $_SESSION['logged_in'] = true;
      $_SESSION['logged_id'] = $id;
      $_SESSION['username'] = $email;
      $_SESSION['nom'] = $nom;
      $_SESSION['prenom'] = $prenom;

      // redirection de l'utilisateur
       echo '<script language="Javascript">';
       echo 'document.location.replace("./index.php")'; // -->
       echo ' </script>';
    }

    // close database
    mysqli_close($db);
  }
?>


<?php include 'views/profile.views.php'; ?>

<?php
   session_start();
   include 'partials/_connecte.php';
   include '../config/database.php';

   // declaration de variable
   $nom = '';
   $longitude = '';
   $latitude = '';

   // tableau d'erreur
   $errors = array();

   $success = array();
   // quand le formulaire est soumit
   if (isset($_POST['enregister'])) {
     // il ne faut pas faire confiance a l'utilisateur
     $nom = strtolower(addslashes($_POST['nom']));
     $longitude = addslashes($_POST['longitude']);
     $latitude = addslashes($_POST['latitude']);



     // validation du formulaire
     if (empty($nom)) {
       array_push($errors,"Le nom de la commune est obligatoire");
     }

     if (empty($latitude)) {
      array_push($errors,"La latitude de la commune est obligatoire");
    }

    if (empty($longitude)) {
      array_push($errors,"La longitude de la commune est obligatoire");
    }





     // verification s'il n'y a pas eu d'erreur
     if (count($errors) == 0) {
       // requete d'insertion

       $query = "INSERT INTO commune (nom,longitude,latitude) VALUES('$nom','$longitude','$latitude')";

       // execution de la requete
       $results = mysqli_query($db,$query);

       if (!mysqli_error($results)) {
         array_push($success,"Une commune ajouter");
       } else {
         array_push($error," Error : ".$db->error);
       }

     }
     mysqli_close($db);
   }

 ?>


<?php include 'views/commune-form.views.php'; ?>

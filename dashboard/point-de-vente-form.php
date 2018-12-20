<?php
   session_start();
   include 'partials/_connecte.php';
   include '../config/database.php';

   //  recuperation de tout les quartiers
   $quar = "SELECT * FROM quartier";
   $quartiers = mysqli_query($db,$quar);

   // recuperation de tout les communes
   $comm = "SELECT * FROM commune";
   $communes = mysqli_query($db,$comm);

   // declaration de variable
   $nom = '';
   $telephone = '';
   $quartier = '';
   $commune = '';
   $livraison = 0;
   $longitude = '';
   $latitude = '';
   $description = '';

   // tableau d'erreur
   $errors = array();

   $success = array();
   // quand le formulaire est soumit
   if (isset($_POST['enregister'])) {
     // il ne faut pas faire confiance a l'utilisateur
     $nom = addslashes($_POST['nom']);
     $telephone = addslashes($_POST['telephone']);
     $quartier = strtolower(addslashes($_POST['quartier']));
     $commune = strtolower(addslashes($_POST['commune']));
     $livraison = addslashes($_POST['livraison']);
     $longitude = addslashes($_POST['longitude']);
     $latitude = addslashes($_POST['latitude']);
     $description = addslashes($_POST['description']);



     // validation du formulaire
     if (empty($nom)) {
       array_push($errors,"Le nom du point de vente est obligatoire");
     }
     if (empty($quartier)) {
       array_push($errors,"Le nom du quartier du point de vente est obligatoire");
     }
     if (empty($commune)) {
       array_push($errors,"Le nom du commune du point de vente est obligatoire");
     }
     if (empty($telephone)) {
       array_push($errors,"Le telephone du point de vente est obligatoire");
     }
     if (empty($livraison)) {
       array_push($errors,"vous devez indiquer si vous assurer livraison");
     }
     if (empty($longitude)) {
       $longitude = 0;
     }
     if (empty($latitude)) {
       $latitude = 0;
     }




     // verification s'il n'y a pas eu d'erreur
     if (count($errors) == 0) {
       // requete d'insertion

       $query = "INSERT INTO point_de_vente (nom,telephone,quartier,commune,livraison,longitude,latitude,date_create,description)
                VALUES('$nom','$telephone','$quartier','$commune','$livraison','$longitude','$latitude','$datepost','$description')";

       // execution de la requete
       $results = mysqli_query($db,$query);

       if (!mysqli_error($results)) {
         array_push($success,"Point de vente ajouter");
       } else {
         array_push($error," Error : ".$db->error);
       }

     }
     mysqli_close($db);
   }

 ?>


<?php include 'views/point-de-vente-form.views.php'; ?>

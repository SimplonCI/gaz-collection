<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>E-GAZ</title>
  </head>
  <body>
    <ul>
      <?php if(isset($_SESSION['logged_in'])): ?>
      <li style="float:right"> <a href="#"> <span class="profile" id="profile"></span> </a> </li>
      <li style="float:right"><a href="profile.php?id=<?php echo$_SESSION['logged_id']?> ">Hi, <?php echo $_SESSION['prenom']; ?></a></li>
      <li style="float:right"><a href="index.php?logout='true'">deconnexion</a></li>
      <li style="float:right"><a href="#about">About</a></li>
    <?php else: ?>
      <li style="float:right"><a href="login.php">Connexion</a></li>
      <li style="float:right"><a href="register.php">Inscription</a></li>
      <li style="float:right"><a href="#about">About</a></li>
    <?php endif ?>
    </ul>
    <div class="title">
        <h3>Trouver un point de gaz proche de chez vous </h3>
    </div>
    <div class="container" id="header">
      <form id="search" method="get" action="search.php">
          <div class="inner-form">
            <div class="input-field second-wrap">
              <select id="commune" name="commune" required>
              <option value="" disabled selected>Dans quelle commune habitez-vous?</option>
              <?php if (mysqli_num_rows($communes) > 0) : ?>
                  <?php while ($row = $communes -> fetch_assoc()): ?>
                    <option value="<?php echo $row['nom']; ?>"><?php echo $row['nom']; ?></option>
                  <?php  endwhile ?>
              <?php endif; ?>
              </select>
            </div>
            <div class="input-field second-wrap">
              <select id="quartier" name="quartier" required>
                  <option value="" disabled selected>Dans quel quartier habitez-vous?</option>
                  <?php if (mysqli_num_rows($quartiers) > 0) : ?>
                      <?php while ($row = $quartiers -> fetch_assoc()): ?>
                        <option value="<?php echo $row['nom']; ?>"><?php echo $row['nom']; ?></option>
                      <?php  endwhile ?>
                  <?php endif; ?>
                </select>
            </div>
            <div class="input-field third-wrap">
              <button class="btn-search" type="submit" name="rechercher">
                <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                </svg>
              </button>
            </div>
          </div>
      </form>
    </div>
  </div>

<div class="container" style="padding-top: 5em;">
  <?php if (mysqli_num_rows($results) > 0): ?>
      <?php while ($rows = $results -> fetch_assoc()): ?>
          <div class="card" style="border: 1px solid #000000;">
              <div class="card-body">
                <h4><?php echo $rows['nom']; ?></h4>
                <p>Quartier : <?php echo $rows['quartier']; ?></p>
                <p>Commune : <?php echo $rows['commune']; ?></p>
              </div>
          </div>
      <?php endwhile ?>

  <?php else: ?>
        <h2>Oups !!!</h2>
        aucun point de vente trouve dans cette zone
  <?php endif; ?>
</div>

    <script src="assets/js/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript">
          $(document).ready(function(){
            $("#commune").select2();
            $("#quartier").select2();
          });
          // var el = document.getElementById('quartier');
          // el.style.width = '300px';
    </script>


    <?php if(isset($_SESSION['logged_in'])): ?>

       <?php $imageUrl = 'data:image/png;base64,'.$_SESSION['profile'] ?>
       <script type="text/javascript">
            document.getElementById('profile').style.background = "url('<?php echo $imageUrl?>')";
       </script>

    <?php endif ?>
  </body>
</html>

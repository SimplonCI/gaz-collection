<ul>
  <?php if(isset($_SESSION['admin_in'])): ?>
  <li style="float:right"> <a href="#"> <span class="profile"></span> </a> </li>
  <li style="float:right"><a href="#about">Hi, <?php echo $_SESSION['gerant_username']; ?></a></li>
  <li style="float:right"><a href="index.php?logout='true'">deconnexion</a></li>
  <li style="float:right"><a href="#about">About</a></li>
<?php else: ?>
  <li style="float:right"><a href="login.php">Connexion</a></li>
  <li style="float:right"><a href="register.php">Inscription</a></li>
  <li style="float:right"><a href="#about">About</a></li>
<?php endif ?>
</ul>

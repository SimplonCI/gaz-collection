<div style="padding-left:8em;padding-top:16px;">
  <?php if (mysqli_num_rows($results) > 0): ?>
      <?php while ($row = $results -> fetch_assoc()): ?>
      <div class="card">
          <div class="container">
            <h4><b><?php echo $rows['nom']; ?></b></h4>
            <p>Commnune : <?php echo $rows['commune']; ?></p>
            <p>Quartier : <?php echo $rows['quartier']; ?></p>
            <p><a href=" <?php echo $rows['quartier']; ?>">Voir plus</a></p>
          </div>
      </div>
    <?php endwhile ?>
      <div class="card">
          <div class="container">
            <h4><b>John Doe</b></h4>
            <p>Architect & Engineer</p>
          </div>
      </div>
  <?php else: ?>
    <h2>Oups !!!</h2>
    aucun point de vente trouve dans cette zone
  <?php endif; ?>
</div>

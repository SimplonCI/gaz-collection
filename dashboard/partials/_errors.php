<?php if(count($errors) > 0): ?>
  <div class="">
      <?php foreach ($errors as $error): ?>
        <p class="error">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
          <?php echo $error; ?>
        </p> <br>
    <?php endforeach; ?>
  </div>

<?php endif; ?>

<?php if(count($success) > 0): ?>
  <div class="">
      <?php foreach ($success as $succes): ?>
        <p class="success">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
          <?php echo $succes; ?>
        </p> <br>
    <?php endforeach; ?>
  </div>

<?php endif; ?>

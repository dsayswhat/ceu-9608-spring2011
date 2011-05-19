

<?php
  if (! empty($_SESSION['messages'])) {
    foreach($_SESSION['messages'] as $type => $messages) { 
  
  ?>
    <div class="<?php echo $type; ?>">
      <ul>
      <?php
      foreach ($messages as $msg) {
        echo "<li>$msg</li>";			
      }
      ?>
      </ul>
    </div>
    <?php
    }
    
    $_SESSION['messages'] = array();
  }
  ?>
<h2>Are you sure you want to delete this joke?</h2>

<div class="container">
  <div class="span-12">
    <p class="right"><a href="jokes_controller.php?action=list">No, take me back to the list</a></p>
    
    <form method="POST" action="jokes_controller.php?action=deletenow">
      <input type="hidden" name="jokeid" value="<?php echo $_GET['jokeid']; ?>" />
      <input type="submit" value="Yes, I'm sure." />
    </form>
    
  </div>
  <div class="append-12 last">
  </div>



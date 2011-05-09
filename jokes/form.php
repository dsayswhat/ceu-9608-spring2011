
<form method="post" action="jokes_controller.php?action=save">

  <fieldset>
    <p>
      <label for="joketext">Text of Joke</label><br/>
    <textarea id="joketext" rows="5" name="joketext"><?php echo $joke['joketext']; ?></textarea>
    </p>
    <p>
      <label for="authorid">Author</label><br/>
	  <?php
	  
		
		?>
      <select name="authorid" id="authorid">
       <?php 
	   foreach ($authors as $author) { 
		  $selected = '';
      if ($author['id'] == $joke['authorid']) { $selected = "selected='selected'"; }
	   ?>
		<option value='<?php echo $author['id']; ?>' <?php echo $selected; ?>><?php echo $author['name']; ?></option>
	   <?php } ?>
      </select>
    </p>
	
    <input type="submit" value="Save joke" />
    <input type="hidden" name="jokeid" value="<?php echo $joke['id']; ?>" />
  </fieldset>
</form>

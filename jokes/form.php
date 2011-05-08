<form method="post" action="index.php?action=update&jokeid=<?php echo $joke['id']; ?>">

  <fieldset>
    <p>
      <label for="joketext">Text of Joke</label><br/>
    <textarea id="joketext" rows="5" name="joketext"><?php echo $joke['joketext']; ?></textarea>
    </p>
    <p>
      <label for="authorid">Author</label><br/>
	  <?php
	  $authors = array( 
		array('label'=>'author 1', 'value'=>1), 
		array('label'=>'author 2', 'value'=>2), 
		);
		?>
      <select name="authorid" id="authorid">
       <?php foreach ($authors as $author) { ?>
		<option value='<?php echo $author['value']; ?>'><?php echo $author['label']; ?></option>
	   <?php } ?>
      </select>
    </p>
	
    <input type="submit" value="Save joke" />
    <input type="hidden" name="jokeid" value="<?php echo $joke['id']; ?>" />
  </fieldset>
</form>

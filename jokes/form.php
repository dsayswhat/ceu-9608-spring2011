<form method="post" action="index.php?action=update&jokeid=<?php echo $joke['id']; ?>">

  <fieldset>
    <p>
      <label for="joketext">Text of Joke</label><br/>
    <textarea id="joketext" rows="5" name="joketext"><?php echo $joke['joketext']; ?></textarea>
    </p>
    <p>
      <label for="authorid">Author</label><br/>
      <select name="authorid" id="authorid">
        <option>
          author 1
        </option>
        <option>
          author 2
        </option>
      </select>
    </p>
	
    <input type="submit" value="Save joke" />
    <input type="hidden" name="jokeid" value="<?php echo $joke['id']; ?>" />
  </fieldset>
</form>

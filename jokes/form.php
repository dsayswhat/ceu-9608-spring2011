<form method="post" action="index.php?action=update&jokeid=<?php echo $joke['id']; ?>">

  <fieldset>
    <p>
      <label for="joketext">Text of Joke</label><br/>
    <textarea id="joketext" rows="5" name="joketext">
      Joke text here...
    </textarea>
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
	 
	<p>
		<ul>
			<li><input type="radio" name="myRadio" value="1" />radio value 1</li>
			<li><input type="radio" name="myRadio" value="2" />radio value 2</li>	
			<li><input type="radio" name="myRadio" value="3" />radio value 3</li>	
		</ul>
	</p>
	<p>
		<ul>
			<li><input type="checkbox" name="myCbx" value="1" />checkbox value 1</li>
			<li><input type="checkbox" name="myCbx" value="2" />checkbox value 2</li>	
			<li><input type="checkbox" name="myCbx" value="3" />checkbox value 3</li>	
		</ul>
	</p>
	
    <input type="submit" value="Save joke" />
    <input type="hidden" name="jokeid" value="" />
  </fieldset>
</form>

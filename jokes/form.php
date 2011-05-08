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
			<li><input id="rdo1" type="radio" name="myRadio" value="1" /><label for="rdo1">radio value 1</label></li>
			<li><input id="rdo2" type="radio" name="myRadio" value="2" /><label for="rdo2">radio value 2</label></li>	
			<li><input id="rdo3" type="radio" name="myRadio" value="3" /><label for="rdo3">radio value 3</label></li>	
		</ul>
	</p>
	<p>
		<ul>
			<li><input id="cbx1" type="checkbox" name="myCbx" value="1" /><label for="cbx1">checkbox value 1</label></li>
			<li><input id="cbx2" type="checkbox" name="myCbx" value="2" /><label for="cbx2">checkbox value 2</label></li>	
			<li><input id="cbx3" type="checkbox" name="myCbx" value="3" /><label for="cbx3">checkbox value 3</label></li>	
		</ul>
	</p>
	
    <input type="submit" value="Save joke" />
    <input type="hidden" name="jokeid" value="" />
  </fieldset>
</form>

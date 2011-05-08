<table>
  <tr>
    <th>Joke</th>
    <th>Author</th>
    <th></th>
    <th></th>
  </tr>
 
<?php foreach ($jokes as $j) { ?>
  <tr>
    <td><?php echo $j['joketext']; ?></td>
    <td><?php echo $j['name']; ?></td>
    <td><a href="index.php?action=edit&jokeid=<?php echo $j['id']; ?>">Edit</a></td>
    <td><a href="">Delete</a></td>
  </tr>
<?php } ?>

</table>

<?php /*
       
       <?php foreach ($jokes as $j) { ?>
  <tr>
    <td><?php echo $j['joketext']; ?></td>
    <td><?php echo $j['name']; ?></td>
    <td><a href="index.php?action=edit&jokeid=<?php echo $j['id']; ?>">Edit</a></td>
    <td><a href="index.php?action=delete&jokeid=<?php echo $j['id']; ?>">Delete</a></td>
  </tr>
  <?php } ?>
      */?>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
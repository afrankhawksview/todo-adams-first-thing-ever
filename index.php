<?php

require 'checklist.php';

var_dump($list)

?>

<h1>Checklist</h1>
<form method="post" action="index.php">
	<?php 
		foreach ($list as $item) {
			echo "<input type='checkbox' name='checklist' value='" . $item . "'' checked> " . $item . "<br>";
		} 
	?>
	
	<input type="submit" value="submit">
</form>

<form method="post" action="additem.php">
	<input type="text" name="itemtoadd">
	<input type="submit" value="Add Item">
</form>
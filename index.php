<?php

session_start();

require 'checklist.php';

$method = $_SERVER['REQUEST_METHOD'];

if ( $method === 'POST') {
	$list[] = $_POST['itemtoadd'];
}

?>

<h1>Checklist</h1>
<form method="post" action="index.php">
	<?php 
		foreach ($_SESSION["list"] as $item) {
			echo "<input type='checkbox' name='checklist' value='" . $item . "'> " . $item . "<br>";
		} 
	?>
	
	<input type="submit" value="submit">
</form>

<form method="post" action="index.php">
	<input type="text" name="itemtoadd">
	<input type="submit" value="Add Item">
</form>
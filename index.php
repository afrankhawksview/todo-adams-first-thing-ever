<?php

if (!isset($_SESSION)) {

session_start(); 

$_SESSION['list'] = array();

}

$method = $_SERVER['REQUEST_METHOD'];



if ( $method === 'POST') {

$items = $_POST;

foreach ($items as $item){
		$_SESSION['list'][] = $item;
	}

}


?>

<h1>Checklist</h1>
<form method="post" action="index.php">
	<?php 
		foreach ($_SESSION["list"] as $item) {
			echo "<input type='checkbox' name='checklist' value='" . $item . "'> " . $item . "<br>";
		} 
	?>
</form>

<form method="post" action="index.php">
	<input type="text" name="itemtoadd">
	<input type="submit" value="Add Item">
</form>
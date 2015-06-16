<?php

if (!isset($_SESSION)) {

session_start(); 

}

$method = $_SERVER['REQUEST_METHOD'];

$list = array();

$list[] = "Take Out Garbage";
$list[] = "Pick Up Kids";
$list[] = "Get Groceries";

if ( $method === 'POST') {
	$list[] = $_POST['itemtoadd'];
}

$_SESSION['list'] = $list;

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
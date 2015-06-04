<?php

$list = array();

$list[] = "item1";
$list[] = "item2";
$list[] = "item3";

var_dump($list);

?>

<h1>Checklist</h1>
<form method="_POST" action="index.php">
	<?php 
		foreach ($list as $item) {
			echo "<input type='checkbox' name='checklist' value='" . $item . "'' checked> " . $item . "<br>";
		} 
	?>
	
	<input type="submit" value="submit">
</form>
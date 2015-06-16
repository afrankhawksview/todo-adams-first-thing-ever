<?php



$list = array();

$list[] = "Take Out Garbage";
$list[] = "Pick Up Kids";
$list[] = "Get Groceries";

if ( $method === 'POST') {
	$list[] = $_POST['itemtoadd'];
}

$_SESSION['list'] = $list;

?>
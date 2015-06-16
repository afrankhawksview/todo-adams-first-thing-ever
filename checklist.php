<?php

session_start();

$list = array();

$list[] = "Take Out Garbage";
$list[] = "Pick Up Kids";
$list[] = "Get Groceries";

$_SESSION["list"] = $list;

?>
<?php
require("calculation.php");

$calculation = new Calculation();
$calculation->getPrice(new Peach());
$calculation->getPrice(new Strawberry());
?>
<?php
include_once("calculator.php");

Use Library\Help\Calculator\calculator;
$calculator = new calculator;
echo $calculator->add(20,3);
?>
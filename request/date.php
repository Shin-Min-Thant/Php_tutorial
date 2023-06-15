<?php 
date_default_timezone_set("Asia/Yangon");

echo date("d-m-o h:i a");
echo "<br>";

echo date("M-d-o H:i,st",strtotime("6pm 2020-03-15"));
echo"<hr>";

$currentDate = date_create(date("c"));
echo date_format($currentDate,"d-m-o h:i a");
echo"<hr>";


?>
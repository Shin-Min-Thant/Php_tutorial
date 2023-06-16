<?php
$ary = ["Name"=> "Shin Min", "age"=>"20","jo"=>"PHP Developer"];

$num =20;

array_walk($ary,function($key,$value) use($num){
    $num = ++$num;
    echo "Key is $key and Value is $value.Number is $num";
    echo "<br>";
});
?>

<?php
$num =10;
$var = function() use($num){
    echo "This is closure function and number is $num";
};

 $var();
?>
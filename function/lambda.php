<?php 
function doit($var1,$var2,$var){
    $total = $var1+$var2;
    $var($total);
}
doit(2,3,function($var){
    echo " I am Lambada and total is $var";
})

?>
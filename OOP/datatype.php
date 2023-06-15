<?php
class Type{
    public $num;
    public function dataType(string $num) : int {
   
     return 10;
    }
}

$doit = new Type;
echo $doit->dataType("make");
?>
<?php 
$ary = [
    ["Dog","Cat","Rabbit","Elephant","Horse"],
    ["Dog","Cat","Rabbit","Elephant","Horse"],
    ["Dog","Cat","Rabbit","Elephant","Horse"]
];

$data = serialize($ary);
echo $data;
$normal = unserialize($data);
echo "<pre>". print_r($normal,true) . "</pre>";
echo "<hr>";
echo "<br>";
class Make{
    public function __sleep(){
        echo "You are making serialize function.";
        return [];
    }

    public function __wakeup(){
        echo "This is wakeup function";
        
    }
}
$make = new Make;
$ser= serialize($make);
echo $ser;
$unstr = unserialize($ser);
echo "<pre>". print_r($unstr,true) . "</pre>";
echo "<hr>";

class doit{
   public function __toString(){
        return "You are calling object function.";
    }

    public function __invoke(){
        return "You are calling Method function.";
    }

    public function __clone(){
        return "You are calling clone function";
    }
}
$new = new doit;
echo $new;
echo $new();
$aa = clone $new;
echo $aa;
?>
<?php 
$animal=["name"=>"Rabbit","age"=>3,"address"=>"Mandalay"];
$obj=(object)$animal;
echo $obj->name;
echo "<br>";

class Person{
    public function __get($var){
        echo"You are calling non exit method $var";
    }

    public function __set($var,$value){
        echo "You are calling non exit $var of $value.";
    }
}

$obj = new Person;
echo $obj->name;
echo "<br>";
echo $obj->name="Mg Mg";
echo "<hr>";

class Animal{
    public function __call($nam,$val){
        echo "You are calling $val of $nam.";
    }

    public static function __callStatic($cow,$val){
        echo"You are calling $val of $cow";
    }
}

Animal::hey($name="Kyaw");

?>
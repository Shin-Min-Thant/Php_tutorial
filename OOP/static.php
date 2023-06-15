<?php 
class AboutMe{
    public static $name;
    public static $age;
    
    public static function myName($name){
        self::$name = $name;
        echo " I am $name";

    }

    public static function myAge($age){
        self::$age = $age;
        echo " My age is $age";
    }
}

AboutMe::myName("Aung Aung");
AboutMe::myAge(20);
echo "<br>";

class Mother{
    public static function getName(){
        return "hello world";
    }
}

class Child extends Mother{
    public $value;
    public function getMother(){
        $this->value= parent::getName();
    }
}

$Par = new Child;
echo $Par -> value;


?>
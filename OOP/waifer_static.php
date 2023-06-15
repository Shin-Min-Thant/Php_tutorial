<?php 
class Math{
    public static $count=0;

    public function doit(){
        self::$count++;
        echo self::$count . "<br>";
    }
}

$obj=new Math;
$obj->doit();
$obj->doit();
$obj->doit();
$obj->doit();

echo "<hr>";

class Make{
    public static $work = 0;
    public function fun(){
         echo ++self::$work;
         echo self::doti();
    }

    public static function doti(){
        echo"Woow";
    }
}

$ma = new Make;
$ma->fun();
?>
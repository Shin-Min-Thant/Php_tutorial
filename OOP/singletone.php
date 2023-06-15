<?php
class Index{
    public static $name = "Shin Min";
    public static $instance;

    private function __construct(){
       self::$name = "Alina Padridge";
    }

    public static function getindex(){
        if(self::$instance == null){
            self::$instance = new Index;
        }
           return self::$instance;
       
    }

    public function getName(){
        return self::$name;
    }
}

$goit = Index::getindex();
echo $goit->getName();
?>
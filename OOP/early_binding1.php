<?php
class One{

    public static $name = "Shin Min";
    public static function setMyName(){
        return static::$name;
    }

    public static function callMyName(){
        echo static::setMyName();
    }
}

class Two extends One{
    public static function setMyName(){
        echo static::$name . " and " . "Alina pr.";
    }
}

Two::setMyName();
?>
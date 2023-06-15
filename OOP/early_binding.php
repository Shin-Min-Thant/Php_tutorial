<?php
class One{
    public function className(){
        return __CLASS__;
    }

    public function callName(){
       echo static::className();
    }
}

class Two extends One{
    public function className(){
        return __CLASS__;
    }
}

$sta = new Two;
$sta->callName();
?>
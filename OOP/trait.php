<?php
trait Greeting{
    public function Hello(){
        echo "This is hello testing";
    }

    public function mySelf(){
        echo "This is about myself";
    }
}

trait Fruit{
    public function apple(){
        echo "This is apple function";
    }
}


class allOne{
    use Greeting ,Fruit;
}

$testing = new allOne;
$testing->Hello();
$testing->apple();
?>
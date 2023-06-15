<?php 
class getColor{
    public $name = "Rabbit";
    private $color = "Yellow";

    public function setColor($data){
        return $this->name=$data;
    }
    public function getColor(){
        return $this->name;
    }
}

$animal = new getColor;
echo $animal->setColor("Tiger");
echo $animal->getColor();
?>
<?php 

class Rent{
    public $car ,$driver;

    public function __construct(Car $car,Driver $driver){
        $this->car = $car;
        $this->driver = $driver;

    }

    public function getCar(){
        return $this->car;
    }

    public function getDriver(){
        return $this->driver;
    }
}
class Driver{
    public $name,$age,$hourrate,$family,$mritalstatus;

    public function setName(string $name){
        $this->name = $name;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setAge(int $age){
        $this->age = $age;
    }

    public function getAge() : int{
        return $this->age;
    }

    public function setHour(float $hour){
        $this->hourrate = $hour;
    }

    public function getHour() : float{
        return $this->hourrate;
    }

    public function setFamily(array $family){
        $this->family = $family;
    }

    public function getFamily() : array{
        return $this->family;
    }    public function setMritalstatus(bool $mritalstatus){
        $this->mritalstatus = $mritalstatus;
    }

    public function getMitalstatus() : bool{
        return $this->mritalstatus;
    }
}

class Car{
    public $brand,$model,$price,$speed;
    public function __construct(string $brand,int $model,float $price,float $speed){
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->speed = $speed;
    }

    public function getBrand() : string{
       return  $this->brand;

    }
    public function getModel() : int{
        return  $this->model;
 
     }
     public function getPrice() : float{
        return  $this->price;
 
     }
     public function getspeed() : float{
        return  $this->speed;
 
     }
}

$dKyawKyaw = new Driver;
$dKyawKyaw->setName("Kyaw Kyaw");
$dKyawKyaw->setAge("22");
$dKyawKyaw->setFamily(["Father"=>"U Moe","Mother"=>"Daw Kyawt","Sibling"=>"Kyaw Thu"]);
$dKyawKyaw->setHour(10.5);
$dKyawKyaw->setMritalstatus(FALSE);

$dAungAung = new Driver;
$dAungAung->setName("Aung Aung");
$dAungAung->setAge("28");
$dAungAung->setFamily(["Father"=>"U Aung Lwin","Mother"=>"Daw Yoon","Sibling"=>"Chit Su"]);
$dAungAung->setHour(13.2);
$dAungAung->setMritalstatus(TRUE);

$BMW = new Car("BMW",2018,21.3,3.2);
$Toyota = new Car("Toyota",2020,21.2,2.1);

$rent1 = new Rent($BMW,$dKyawKyaw);
$rent2 = new Rent($Toyota,$dAungAung);

$lists = [$rent1,$rent2];

echo "There are " . count($lists) . "cars in our company";
echo "<br>";
echo "First driver is " .$lists[0]->getDriver()->getName() ;
echo "<hr>";
$ser = serialize($lists);
echo $ser;
echo "<hr>";
$unser = unserialize($ser);
echo "<pre>" . print_r($unser,true) . "</pre>";
echo "<hr>";

echo "The " . $lists[1]->getDriver()->getName() . " car brand is " . $lists[1]->getCar()->getBrand();
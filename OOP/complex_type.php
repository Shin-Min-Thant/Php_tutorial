<?php 
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

$dAungAung->setName("Aung Aung");
$dAungAung->setAge("28");
$dAungAung->setFamily(["Father"=>"U Aung Lwin","Mother"=>"Daw Yoon","Sibling"=>"Chit Su"]);
$dAungAung->setHour(13.2);
$dAungAung->setMritalstatus(TRUE);
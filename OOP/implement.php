<?php
include_once("interface.php");
class girlitem implements animeShop{

    private $item;
    public function gameItem($item){
        $this->item=$item;
    }

    public function output(){
        echo "<pre>".print_r($this->item,true) . "</pre>";
        echo"She use " . $this->item[count($this->item)-1] . " when she fight with enemy.";
    }
}

$game= new girlitem;
$girl =["stick","hand","hair","gun"];
$game->gameItem($girl);
$game->output();
?>
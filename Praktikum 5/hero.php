<?php
class Hero{
    //atribut
    public $name;
    public $hp;
    public $damage;

    //method
    public function __construct($name,$hp,$damage)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->damage = $damage;
    }
    public function getDetail(){
        echo "Name: $this->name<br>";
        echo "Health poin: $this->hp<br>";
        echo "Damage: $this->damage<br>";
        echo "<br>===================<br>";
    }
}




//membuat object
$hero1 = new Hero("Nana",30000,500);
$hero1->getDetail();

$hero2 = new Hero('Balmond',400000, 30);
$hero2->getDetail();

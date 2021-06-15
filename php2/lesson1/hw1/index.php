<?php

class Human
{
    public $name;
    public $age;
    public $health;

    public function __construct($name = '', $age = 0, $health = 100)
    {
        //var_dump("Я родился! " . self::class);
        $this->name = $name;
        $this->age = $age;
        $this->health = $health;
    }



    public function sayName()
    {
        echo "Меня зовут " . $this->name . "<br>";

    }

}

class Warrior extends Human {

    public $attack;

    public function __construct($name = '', $age = 0, $health = 100, $attack = 0)
    {
        parent::__construct($name, $age, $health, $attack);
        $this->attack = $attack;
    }

    public function sayName()
    {
        parent::sayName();
        echo " и я Воин<br>";

    }

    public function attack(Human $target) {
        $target->health -= $this->attack;
        echo "Воин наносит урон {$target->name} на {$this->attack} урона.<br>";
    }
}

class Hiller extends Human {

    public $heal;

    public function __construct($name = '', $age = 0, $health = 100, $heal = 0)
    {
        parent::__construct($name, $age, $health, $heal);
        $this->heal = $heal;
    }

    public function sayName()
    {
        parent::sayName();
        echo " и я Лекарь<br>";

    }

    public function heal(Human $target) {
        $target->health += $this->heal;
        echo "Лекарь исцеляет урон {$target->name} на {$this->heal} здоровья.<br>";
    }
}

$human1 = new Human("Грут", 233, 100);
$human1->sayName();

$warrior1 = new Warrior("Конан", 22, 100, 80);
$warrior1->sayName();
$warrior1->attack($human1);
$hiller = new Hiller("Ауриэль", 25, 600, 70);
$hiller->sayName();
$hiller->heal($human1);



var_dump($human1);
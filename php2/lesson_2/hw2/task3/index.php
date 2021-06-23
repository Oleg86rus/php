<?php

abstract class Product {
    protected $name;
    public $price;

    protected static $income = 0;

    function __construct($name, $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }
    abstract public function sell($quantity);
    public function print_income() {
        echo "Общий доход со всех товаров составил " . Self::$income;
    }

}

class IT_product extends Product {
    function __construct($r_product) 
    {
        $this->name = $r_product->name;
        $this->price = $r_product->price;
    }
    public function sell($quantity){
        Parent::$income = Parent::$income + ($quantity * $this->price *0.5);

    }
}

class Real_product extends Product {
    public function sell($quantity) {
        Parent::$income = Parent::$income + ($quantity * $this->price);

    }
}

class Weight_product extends Product {
    public function get_final_price($weight){
        if ($weight < 3) {
            return $this->price;
        } elseif ($weight >= 3 and $weight < 6) {
            return $this->price*0.6;
        } else {
            return $this->price*0.3;
        }
    }
    public function sell($weight) {
        Parent::$income = Parent::$income + ($weight * $this->get_final_price($weight));
    }
}

$r_magazine = new Real_product("Журнал", 400);
$it_magazine = new It_product($r_magazine);
$w_naills = new Weight_product("Гвозди", 100);

$it_magazine->sell(1);
$r_magazine->sell(1);
$w_naills->sell(7);
$it_magazine->print_income();
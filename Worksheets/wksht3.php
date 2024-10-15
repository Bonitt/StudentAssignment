<?php
    class Car{
        public $model;
        public $color;
        protected $price;
        public static $wheels = 4;
        // public function set_model($model){
        //     $this->model = $model;
        // }
        // public function set_color($color){
        //     $this->color = $color;
        // }
        // public function get_model(){
        //     return $this->model;
        // }
        // public function get_color(){
        //     return $this->color;
        // }

        public function __construct($model, $color, $price){
            $this->model = $model;
            $this->color = $color;
            $this->price = $price;

        }

        public function get_price() {
            return $this->price;
        }

        
    }

    class ElectricCar extends Car{

        protected $batteryCapacity;
        public static function question() {
            echo "Am I a real car\n";
        }

        public function __construct($name, $color,$price, $batteryCapacity){
            parent::__construct($name, $color, $price);
            
            $this->batteryCapacity = $batteryCapacity;
        }
        public function get_batteryCapacity() {
            return $this->batteryCapacity;
        }

    }

    // $carOne = new Car();
    // $newCar->color = "Red";
    // $newCar->model = "Ferrari";

    // $carTwo = new Car();
    // $carTwo->color = "Yellow";
    // $carTwp->model = "Lambo"

    $carThree = new Car("Porsche", "Black", 90000);

    echo ("The car is a {$carThree->color} {$carThree->model} that costs {$carThree->get_price()} Euros\n");

    $electricOne = new ElectricCar("Tesla", "White", 120000, "50kWh");

    
    echo ("The car is a {$electricOne->color} {$electricOne->model} that costs {$electricOne->get_price()} Euros and has a battery capacity of {$electricOne->get_batteryCapacity()}\n");
    $electricOne->question();

?>
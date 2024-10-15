<?php
    
    // Declare  Strict Types
    // declare(strict_types = 1);
    
    // Class Definition

    class Fruit{
        // Properties
        protected $name;
        protected $color;
        // Constructors
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;


        }
        // Methods
        // Description: This function will return the props name, color
        // Arguments: Nothing
        // Returns: Nothing
        public function intro() {
            echo "The furit is {$this->name} and the colour is {$this->color}.\n";

        }
                    
    }

    // Class Definition
    class Strawberry extends Fruit {
        // Properties
        protected $weight;
        

        // Constructors
        public function __construct($name, $color, $weight) {
            parent::__construct($name, $color);

            // Initialize the new child property
            $this->weight = $weight;
        }
        
        // Methods
        public function message() {
            echo "Am I a fruit or a berry?\n";
        }

        public function get_weight() {
            echo "Weight of this strawberry is {$this->weight}.\n";
        }
    }


    $strawberry = new Strawberry("STRAWBERRY", "red", 100);
    $strawberry->message();
    $strawberry->intro();
    $strawberry->get_weight();
?>
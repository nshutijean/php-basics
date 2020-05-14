<?php
    /**
     * The OOP part of PHP
     * - Encapsulation: hiding implementation details and only expose methods
     * - Inheritance: child-parent relationship among classes
     * - Polymorphism: single form but different implementations
     */

    //Encapsulation
    class Animal {
        private $family;
        private $food;

        //constructor
        public function __construct($family, $food) {
            $this->family = $family;
            $this->food = $food;
        }

        //getters and setters
        public function get_family() {
            return $this->family;
        }
        public function set_family($family) {
            $this->family = $family;
        }
        public function get_food() {
            return $this->food;
        }
        public function set_food($food) {
            $this->food = $food;
        }
    }

?>
<?php
    //Inheritance
    class Cow extends Animal {
        private $owner;
        public function __construct($family, $food) {
            parent::__construct($family, $food);
        }
        public function get_owner() {
            return $this->owner;
        }
        public function set_owner($owner) {
            $this->owner = $owner;
        }
    }
?>
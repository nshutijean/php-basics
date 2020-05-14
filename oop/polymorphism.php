<?php
    interface Machine {
        public function calcTask(); 
    }
    class Circle implements Machine {
        private $radius;
        public function __construct($radius) {
            $this->radius = $radius;
        }
        public function calcTask() {
            return $this->radius * $this->radius * pi();
        }
    }

    class Rectangle implements Machine {
        private $length;
        private $width;
        public function __construct($length, $width) {
            $this->length = $length;
            $this->width = $width;
        }
        public function calcTask() {
            return $this->length * $this->width;
        }
    }
    //instantiating
    $theCircle = new Circle(4);
    $theRectangle = new Rectangle(4, 5);

    //printing out
    echo 'Area of the circle: ' .$theCircle->calcTask();
    echo "\n";
    echo 'Area of the rectangle: ' .$theRectangle->calcTask();
?>
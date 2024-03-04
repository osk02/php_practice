<?php
    class Base {
        public function getEyeColor() {
            return "Blue";
        }
    }
    
    class Derived extends Base {

    }

    $obj = new Derived();

    abstract class Shape {
        protected $color;
        public function __construct($color = 'red') {
            $this->color = $color;
        }
        public function getColor() {
            return $this->color;
        }

        abstract protected function getArea();
    }

    class Square extends Shape {
        protected $length = 4;
        public function getArea() {
            return pow($this->length, 2);
        }
    }

    class Triangle extends Shape {
        protected $base = 4;
        protected $height = 10;
        public function getArea() {
            return (0.5 * $this->base * $this->height);
        }
    }

    class Circle extends Shape {
        protected $radius = 5;
        public function getArea() {
            return pi() * pow($this->radius, 2);
        }
    }
    $square = new Square();
    $triangle = new Triangle();
    $circle = new Circle();
?>
<html>
    <head>
        <title>Inheritance</title>
    </head>
    <body>
        <h3>Eye Color: <?php echo $obj->getEyeColor(); ?></h3>
        <hr>
        <h3>Color: <?php echo $square->getColor(); ?></h3>
        <h3>Area of Sqaure: <?php echo $square->getArea(); ?></h3>
        <h3>Area of Triangle: <?php echo $triangle->getArea(); ?></h3>
        <h3>Area of Circle: <?php echo $circle->getArea(); ?></h3>
        <!-- <h3>Area of Triangle: <?php echo (new Triangle())->getArea(); ?></h3> -->
    </body>
</html>
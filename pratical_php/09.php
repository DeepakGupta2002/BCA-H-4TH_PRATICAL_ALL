<?php

abstract class Shape {
    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Example usage
$triangle = new Triangle(5, 8);
echo "Area of Triangle: " . $triangle->calculateArea() . "\n";

$rectangle = new Rectangle(4, 6);
echo "Area of Rectangle: " . $rectangle->calculateArea() . "\n";

?>

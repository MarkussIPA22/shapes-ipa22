<?php
include_once "Shape.php";

class Rectangle extends Shapes {
    public $width;
    public $height;

    function __construct($width,$height, $color)
    {
        parent::__construct($color);

        $this->width = $width;
        $this->height =$height;
    }

public function calculateArea()
{
    return $this->width * $this->height;
}
}
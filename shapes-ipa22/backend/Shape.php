<?php

abstract class Shapes {
    public $color;
    abstract public function calculateArea() ;
function __construct($color)
{
    $this->color = $color;
}

    }


<?php
header('Access-Control-Allow-Origin: *');
$data = ["messege" => "Message from PHP"];
echo json_encode($data);

abstract class Shape {
    public $color;
    abstract public $calculateArea() {

    }
}
class Rectangle extends 
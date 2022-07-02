<?php
namespace App\Solid\OpenClosed;

class Circle implements Shape {

    public function __construct(private $radius)
    {

    }
    public function area() {

        return $this->radius * pi();
    }
}

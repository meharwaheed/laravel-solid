<?php
namespace App\Solid\OpenClosed;

class Triangle implements Shape {

    public function __construct(private $height, private $base)
    {

    }
    public function area() {

        return ($this->height * $this->base) / 2;
    }
}

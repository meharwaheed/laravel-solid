<?php
namespace App\Solid\OpenClosed;

class Square implements Shape {

    public function __construct(private $height, private $width)
    {

    }
    public function area() {

        return $this->height * $this->width;
    }
}


## Laravel SOLID Principles implementation with various examples


SOLID is a popular set of design principles that are used in object-oriented software development. SOLID is an acronym that stands for five key design principles: single responsibility principle, open-closed principle, Liskov substitution principle, interface segregation principle, and dependency inversion principle.


## Single-Responsibility Principle

    A class should have one and only one reason to change, 
    meaning that a class should have only one job.

## Open-Closed Principle

   Objects or entities should be open for extension but closed for modification.

### Liskov Substitution Principle
    Let q(x) be a property provable about objects of x of type T.
     Then q(y) should be provable for objects y of type S 
     where S is a subtype of T.

    This means that every subclass or derived class should be 
    substitutable for their base or parent class.

### Example
Certainly! The Liskov Substitution Principle (LSP) can be illustrated through a simple example involving inheritance. 
<br><br>
Let's consider a scenario with geometric shapes – a base class <strong> Shape </strong> and two derived classes <strong> Rectangle </strong> and <strong> Square</strong>. According to LSP, instances of the derived classes should be able to substitute instances of the base class without affecting the correctness of the program.
```
<?php

class Shape {
    protected $width;
    protected $height;

    public function setDimensions($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Rectangle extends Shape {
    // No additional methods or properties
}

class Square extends Shape {
    public function setDimensions($side) {
        // Overriding the setDimensions method to ensure a square has equal sides
        $this->width = $side;
        $this->height = $side;
    }
}

// Client code
function printArea(Shape $shape) {
    $shape->setDimensions(5, 10);
    echo "Area: " . $shape->area() . PHP_EOL;
}

// Using Rectangle
$rectangle = new Rectangle();
printArea($rectangle); // Output: Area: 50

// Using Square
$square = new Square();
printArea($square); // Output: Area: 25

```

In this example:

The <strong>Shape</strong> class has a method area that calculates the area based on its width and height. <br>
The <strong> Rectangle </strong> class inherits from <strong>Shape</strong> and does not introduce any additional methods or properties.<br>
The <strong>Square</strong> class also inherits from <strong>Shape</strong> but overrides the <strong>setDimensions</strong> method to ensure that a square has equal sides. <br>
The <strong> printArea </strong> function takes a <strong>Shape </strong> parameter and sets dimensions before calculating and printing the area. The key point is that we can substitute instances of <strong>Rectangle</strong> and <strong>Square</strong> for <strong>Shape </strong>without altering the correctness of the program, 
adhering to the Liskov Substitution Principle.<br>

This example emphasizes the idea that derived classes should extend the behavior of the base class without modifying its behavior in a way that could lead to unexpected results when used interchangeably.

## Interface Segregation Principle

    A Client should not be forced to implement an interfaced that it doesn't use.

    In the field of software engineering, the interface segregation
    principle states that no code should be forced to depend on methods
    it does not use. ISP splits interfaces that are very large into
    smaller and more specific ones so that clients will only have 
    to know about the methods that are of interest to them.

## Dependency Inversion Principle
    Its all about decoupling
    Heigher lever code should not depend upon low level code
    Entities must depend on abstractions, not on concretions. 
    It states that the high-level module must not depend on the low-level module, 
    but they should depend on abstractions.


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

## Interface Segregation Principle

    In the field of software engineering, the interface segregation
    principle states that no code should be forced to depend on methods
    it does not use. ISP splits interfaces that are very large into
    smaller and more specific ones so that clients will only have 
    to know about the methods that are of interest to them.

## Dependency Inversion Principle
    Entities must depend on abstractions, not on concretions. 
    It states that the high-level module must not depend on the low-level module, 
    but they should depend on abstractions.

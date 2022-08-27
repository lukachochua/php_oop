<?php




// What I learned today: Classes 1.
// Use a noun for naming a Class as a standard practice.
// A Class can have many instances of objects.
// A Class can have a method and property
// You can use different "visibility" for method and property such as "public".

// What I learned today: Objects 2.
// You can give initial values of an instantiated object using the constructor method.
// There is a three-dot notation in PHP started in version 5.5 where if used before the parameter in a method you can pass any number of parameters in that method.
// There is a Static feature in a class where you can use to resonate with the business terms in your code. 
// You need to be careful though especially when the static method is changing. 

// What I learned today: Inheritance 3.
// Inheritance - same way in real life, you can actually inherit properties and methods from a parent class by using the "extend" keyword after the declaration of a class.
// When creating a child class, always ask "Is this the class that has relationship with the parent class?" This will serve as a guideline for creating cleaner code.
// You can override a property or method of a parent class inside a child class by simply declaring the property or method in the child class.

// What I learned today: Abstract Classes 4.
// It is recommended to use Abstract keyword in a base/parent class that you don't want to be instantiated.
// The magic Laravel framework is doing regarding the conversion of CamelCase to Camel Case is just a preg_replace function usually seen in an abstract class.
// You can use abstract to a method in a base/parent class if you want to make that method required when designing a child class.

// What I learned today: Handshakes and Interfaces 5.
// Handshake and contract via interface are just the same. But since we are talking with Jeffrey Way, we will be using the interface method from now on.
// The interface doesn't have any code in itself.
// Use implements keyword after the class name to define the implementation/code of an interface.

//  What I learned today: Encapsulation 6.
// Encapsulation is a way to protect the integrity of an object. It explicitly tells where a property or method can be used.
// There are 3 types of encapsulation - Public (default), Private, Protected
// Public encapsulation allows you to access a property or use a method of a class.
// Private encapsulation restricts the usage of a property/method of a class to itself.
// Protected encapsulation is the same as private but can be extended to the child/subclasses.

// What I learned today: Object Composition and Abstraction 7.
// Object composition is just a fancy name for using another object to a class to 
// make your code clean and more maintainable.
// Always make sure that your class is not dependent on one provider/gateway/etc. Use OC for that.


// Lessons I learned today: Value objects and mutability 8.
// When you noticed yourself that you are passing more than one parameter to a function often, 
// you might consider combining them in an object.
// Mutability is when you can change something in a class. Immutability is well the opposite of Mutability.
// Passing an object in a function or method is fun and powerful at the same time!

//Lessons I learned today: Exceptions 9.
// Exceptions are powerful way to avoid php code blowing up and making it understand what you want to do
// and what not to do. Usually these comments are longer, but this is an exception.



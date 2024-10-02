<?php
// Define a namespace
namespace MyNamespace;

// Define a function
function greet($name) {
    echo "Hello, $name!<br/>";
}

// Use the function
greet("John"); // Output: Hello, John!<br/>

// Define a simple class
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function sayHello() {
        echo "Hello, my name is " . $this->name . "!<br/>";
    }
}

// Create an instance of the class
$person = new Person("Jane");
$person->sayHello(); // Output: Hello, my name is Jane!<br/>


// Namespaces

// Description
// Namespaces are a way to encapsulate items such as classes, interfaces, functions, and constants. They help avoid name collisions and improve code organization.

// Importance
// - Avoids naming conflicts in larger applications.
// - Improves code structure and readability.

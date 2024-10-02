<!-- Traits -->

<!-- Description -->
<!-- Traits are a mechanism for code reuse in PHP. They allow methods to be included in multiple classes without needing to inherit from a common parent class. -->

<!-- Purpose -->
<!-- - To share functionality across multiple classes. -->
<!-- - To avoid the problems associated with multiple inheritance. -->

<!-- Example -->
<?php
trait Logger {
    public function log($message) {
        echo "[Log] " . $message . "<br/>";
    }
}

class User {
    use Logger;

    public function createUser($name) {
        $name = trim($name); // Trim spaces from user input
        if (!empty($name)) {
            $this->log("User '$name' created.");
        } else {
            $this->log("User creation failed: Name cannot be empty.");
        }
    }
}

class Product {
    use Logger;

    private $name;
    private $price;

    // Constructor to initialize name and price
    public function __construct($name, $price) {
        $this->name = trim($name); // Trim spaces from product name
        $this->price = $price; // Set price
    }

    public function createProduct() {
        if (!empty($this->name) && is_numeric($this->price) && $this->price > 0) {
            $this->log("Product '{$this->name}' created with price \${$this->price}.");
        } else {
            $this->log("Product creation failed: Invalid name or price.");
        }
    }
}

// Usage
$user = new User();
$user->createUser("Alice"); // Outputs: [Log] User 'Alice' created.

$product = new Product("Laptop", 999.99); // Create a product with name and price
$product->createProduct(); // Outputs: [Log] Product 'Laptop' created with price $999.99.
?>

<!-- Interfaces

Description
An interface defines a contract for classes. It specifies methods that a class must implement but does not provide their implementation.

Significance
- Promotes consistent method signatures across different classes.
- Allows multiple inheritance of method signatures, enabling a class to implement multiple interfaces. -->

<!-- Example -->
 <?php
interface Shop {
    public function getPrice(); // Method to be implemented by classes
}

class Product implements Shop {
    private $price;

    public function __construct($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }
}

class Service implements Shop {
    private $hourlyRate;
    private $hours;

    public function __construct($hourlyRate, $hours) {
        $this->hourlyRate = $hourlyRate;
        $this->hours = $hours;
    }

    public function getPrice() {
        return $this->hourlyRate * $this->hours;
    }
}

// Usage
$product = new Product(100); // Price of a product is 100
echo "Product Price: $" . $product->getPrice() . "<br/>"; // Outputs: Product Price: $100

$service = new Service(20, 5); // Hourly rate is 20, and 5 hours worked
echo "Service Price: $" . $service->getPrice() . "\n"; // Outputs: Service Price: $100
?>

<!-- Explanation

Interface: The Shop interface defines a method getPrice() that must be implemented by any class that implements the interface.
Classes:
Product represents a simple product with a fixed price.
Service calculates the price based on an hourly rate and the number of hours worked.
Usage: When getPrice() is called on instances of Product and Service, it outputs the price based on the type of item (product or service). -->
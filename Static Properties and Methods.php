<!-- Static Properties and Methods

Description
Static properties and methods belong to the class itself rather than to any specific instance. They can be accessed without creating an object of the class.

Use Cases
- To hold global data shared across all instances of a class.
- To provide utility functions that do not require object instantiation. -->

<?php
class Counter {
    // Private static variable to hold the count value
    private static $count = 0;

    // Static method to increment the count
    public static function increment() {
        self::$count++;
    }

    // Static method to get the current count
    public static function getCount() {
        return self::$count;
    }
}

// Usage example
Counter::increment(); // Increment count to 1
Counter::increment(); // Increment count to 2

// Output the current count
echo "Current Count: " . Counter::getCount(); // Outputs: Current Count: 2
?>

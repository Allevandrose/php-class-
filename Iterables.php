<!-- Iterables

Description
In PHP, **iterables** are types that can be traversed with `foreach`. This includes arrays and objects implementing the `Traversable` interface.

Applications
- Useful for creating classes that represent collections of data.
- Allows for easy iteration through a set of objects. -->

<!-- Example -->
 <?php
// Implementing the IteratorAggregate interface
class MyCollection implements IteratorAggregate {
    // An array to hold the collection items
    private $items = [];

    // Method to add an item to the collection
    public function addItem($item) {
        $this->items[] = $item;
    }

    // Method to return an iterator for the collection
    public function getIterator(): Traversable {
        return new ArrayIterator($this->items);
    }
}

// Usage
$collection = new MyCollection();
$collection->addItem("Item 1");
$collection->addItem("Item 2");

// Iterate over the collection and print each item
foreach ($collection as $item) {
    echo $item . "\n"; // Outputs: Item 1, Item 2
}
?>
<!-- IteratorAggregate Interface: Allows a class to provide a custom iterator (in this case, ArrayIterator) for its objects, making them iterable.

ArrayIterator: A built-in PHP class that provides an iterator for arrays, enabling you to loop through an array easily.
Encapsulation: The $items property is private, enforcing encapsulation and preventing direct access from outside the class. -->
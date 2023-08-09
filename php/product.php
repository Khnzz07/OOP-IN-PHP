<?php
class Product {
    public $name;
    public $price;
    public $category;

    function __construct($name, $price, $category) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    function getInfo() {
        return "{$this->name} is a {$this->category} priced at {$this->price} dollars.";
    }
}

$product1 = new Product("Smartphone", 499.99, "Electronics");
$product2 = new Product("Backpack", 39.95, "Accessories");

echo $product1->getInfo(); // Output: Smartphone is a Electronics priced at 499.99 dollars.
echo $product2->getInfo(); // Output: Backpack is a Accessories priced at 39.95 dollars.

?>
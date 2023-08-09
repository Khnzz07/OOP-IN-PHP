<?php
class Book {
    public $title;
    public $author;
    public $year;

    function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    function getDetails() {
        return "{$this->title} by {$this->author}, published in {$this->year}.";
    }
}

$myBook = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);
$bookDetails = $myBook->getDetails();
echo $bookDetails; // Output: The Great Gatsby by F. Scott Fitzgerald, published in 1925.


?>
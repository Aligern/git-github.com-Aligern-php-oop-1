<?php 
# this is our book class instance
include_once __DIR__ ."/Product.php";

// extends 
class Book extends Product
{
    // Properties of our movies
    public string $pages;

    // __construct allows us to execute code when we create an object
    public function __construct($pages,$id, $title, $image, $description, $rating) {
        $this->pages = $pages;
        // parent:: allows us to use the properties and methods of the parent class
        parent::__construct($id, $title, $image, $description, $rating);
    }
}

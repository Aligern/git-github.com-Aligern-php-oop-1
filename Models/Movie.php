<?php
# this is our movie class instance
include_once __DIR__ ."/Product.php";

// extends 
class Movie extends Product
{
    // Properties of our movies
    public string $language;

    // __construct allows us to execute code when we create an object
    public function __construct($language,$id, $title, $image, $description, $rating) {
        $this->language = $language;
        // parent:: allows us to use the properties and methods of the parent class
        parent::__construct($id, $title, $image, $description, $rating);
    }
}

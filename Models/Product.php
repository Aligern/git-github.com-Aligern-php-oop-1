<?php
#this file is our product class 

class Product
{
    // Properties of our products
    public $id;
    public $title;
    public $image;
    public $description;
    public $rating;
#method of our products
// __construct allows us to execute code when we create an object
    public function __construct($id, $title, $image, $description, $rating) {
        $this->id = $id;
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        $this->rating = $rating;
    }
}
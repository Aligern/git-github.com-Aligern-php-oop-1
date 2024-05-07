<?php
#this is our product class 
// we get the content of the "dbs"
$movies = file_get_contents("movie_db.json");
$books = file_get_contents("books_db.json");

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
$movie = new Product();
echo $movie->id;
$book = new Product();
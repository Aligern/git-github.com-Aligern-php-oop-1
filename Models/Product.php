<?php
// we get the content of the dbs
$movies = file_get_contents("movie_db.json");
$books = file_get_contents("books_db.json");

class Product 
{
    // Properties of our products
    public $id;
    public $name;
    public $image;
    public $description;
    public $rating;
}
$movie = new Product();
$book = new Product();
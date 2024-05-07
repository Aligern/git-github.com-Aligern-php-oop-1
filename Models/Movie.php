<?php
# this is our movie class instance

class Movie
{
    // Properties of our movies
    public string $id;
    public string $title;
    public Category $category;
    // __construct allows us to execute code when we create an object
    public function __construct($id, $title, $category) {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
    }

}

<?php
# this is our movie class instance

class Movie {
    // first we declare our properties
    public $title;
    // second we declare our methods
    public function __construct($text) {
        $this->title = $text;
}
}
$film = new Movie('The Matrix');
echo $film->title;

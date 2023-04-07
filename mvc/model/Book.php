<?php

class Book {

    private $title;
    private $author;
    private $description;

    public function __construct($title, $author, $description) {
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
    }

}
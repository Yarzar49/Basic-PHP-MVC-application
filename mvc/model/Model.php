<?php
include 'Book.php'; //take file in current folder

class Model {

    public function getBookDetails() {

        
        return array(
            "Xyz" => new Book('Xyz', 'yarzar', 'classic book'),
            "Jungle Book" => new Book('Jungle Book', 'R.Kipling', 'A classic Book')
        );
    }

    public function getBook($title) {
        $allBooks = $this->getBookDetails();
        return $allBooks[$title];
    }
}
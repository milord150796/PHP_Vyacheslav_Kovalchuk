<?php 
class Book {
    public $title;
    public $author;
    public $year;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getSummary() 
    {
        return
            "Title: ". $this->title.
            "Author: ". $this->author. 
            "Year: ". $this->year;
    }
}
class Library  {
    public $books=[];
    public function addBook(Book $book){
        $this->books[]=$book;
    }
    public function showBooks(){
        if ($this->books==null){
            echo "No books in the library";
        }else{
            foreach ($this->books as $book) {
                echo $book->getSummary(). PHP_EOL;
            }
        }
    }
}

$book1 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);
$book2 = new Book("1984", "George Orwell", 1949);
$book3 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);

$library = new Library();
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

$library->showBooks();
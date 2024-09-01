<?php
class Book {
    public $title;
    protected $author;
    private $price;
    public $stock;

    public function __construct($title, $author, $price, $stock = 0) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function updateStock($stock) {
        $this->stock = $stock;
        echo "Stock updated for '{$this->title}' with arguments: $stock\n";
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPrice() {
        return $this->price;
    }

    public function displayBook() {
        echo "Title: {$this->title}, Author: {$this->getAuthor()}, Price: \${$this->getPrice()}\n";
    }
}

class Library {
    public $name;
    public $books = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function removeBook($title) {
        foreach ($this->books as $index => $book) {
            if ($book->title == $title) {
                echo "Book {$book->title} removed from the library";
                unset($this->books[$index]);
                return;
            }
        }
    }

    public function displayBooks() {
        echo "Books in the Library:\n";
        foreach ($this->books as $book) {
            $book->displayBook();
        }
    }

    public function closeLibrary() {
        echo "The Library '{$this->name}' is now closed.";
    }
}

// Creating books
$book1 = new Book('The Great Gatsby', 'F. Scott Fitzgerald', 12.99);
$book2 = new Book('1984', 'George Orwell', 8.99);

// Creating a library
$library = new Library('City Library');

// Adding books to the library
$library->addBook($book1);
$library->addBook($book2);

// Updating stock for 'The Great Gatsby'
$book1->updateStock(50);

// Displaying all books
$library->displayBooks();

// Removing the book '1984'
$library->removeBook('1984');

// Displaying books after removal
echo "\nBooks in the library after removal:\n";
$library->displayBooks();

// Closing the library
$library->closeLibrary();
?>

// To solve the problem, I created two classes, `Book` and `Library`, to represent books and a library system using object-oriented programming principles. The `Book` class encapsulates book details with properties such as `title`, `author`, `price`, and `stock`, and uses visibility modifiers (`public`, `protected`, `private`) to control access, along with methods for updating stock and displaying details. The `Library` class manages a collection of books with methods to add, remove, and display books, and utilizes a constructor to initialize the library's name. The script demonstrates encapsulation by restricting access to certain properties, polymorphism through methods specific to each class, and abstraction by hiding the internal workings of the methods, making the solution modular, organized, and easy to understand and maintain.


<?php
class Book {
 // TODO: Add properties as Private
    private $title;
    private $availableCopies;
 
 public function __construct($title, $availableCopies) {
     // TODO: Initialize properties

     $this->title = $title;
     $this->availableCopies = $availableCopies;
     
     }


    // TODO: Add getTitle method
    public function getTitle(){
        return $this->title;
    }


    



    // TODO: Add getAvailableCopies method
    public function getAvailableCopies(){
        return $this->availableCopies;
    }



    // TODO: Add borrowBook method
    public function borrowBook(){
        $this->availableCopies;
    }



    // TODO: Add returnBook method
    public function returnBook(){
        $this->availableCopies;
    }
}


class Member extends Book{
 // TODO: Add properties as Private
 private $name;
 private $availableCopies;



 public function __construct($name) {
      // TODO: Initialize properties
         $this->name = $name;
     }



    // TODO: Add getName method
    public function getName(){
        return $this->name;
    } 
    
    // TODO: Add borrowBook method
    public function borrowBook(){
       $this->availableCopies;
    }



    // TODO: Add returnBook method
    public function returnBook(){
        $this->availableCopies;
    }
}



// Usage


// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.


// TODO: Create 2 books with the following properties
// Book 1 - Name: The Great Gatsby, Available Copies: 5.
// Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);


// TODO: Create 2 members with the following properties
// Member 1 - Name: John Doe
// Member 2 - Name: Jane Smith

$member1 = new Member("John Doe");
$member2 = new Member("John Smith");


// TODO: Apply Borrow book method to each member
$borrow1 = $book1->getAvailableCopies()-1;
$borrow2 = $book2->getAvailableCopies()-1;
$booktitile1 = $book1->getTitle();
$booktitile2 = $book2->getTitle();



// TODO: Print Available Copies with their names:
echo "Available Copies of"." '".$booktitile1."':".$borrow1;
echo "\n";
echo "Available Copies of"." '".$booktitile2."':".$borrow2;

?>
<?php
// Load the XML file into a SimpleXML object
$books = simplexml_load_file("book.xml");

// Loop through each book element and display its attributes and elements
foreach ($books->book as $book) {
  echo "Book ID: " . $book["id"] . "<br>";
  echo "Title: " . $book->title . "<br>";
  echo "Author: " . $book->author . "<br>";
  echo "Publisher: " . $book->publisher . "<br>";
  echo "Price: " . $book->price . "<br><br>";
}
?>

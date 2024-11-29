<?php 

$books = [
    [
        'name' => 'The Bible',
        'author' => 'Jesus',
        'purchaseUrl' => 'http://exempple.com',
        'releaseYear' => 1968
    ],
    [
        'name' => 'Hidden Potential',
        'author' => 'Adam Grant',
        'purchaseUrl' => 'http://exempple.com',
        'releaseYear' => 1999
    ],
    [
        'name' => 'Sabbath School Lesson',
        'author' => 'John Doe',
        'purchaseUrl' => 'http://exempple.com',
        'releaseYear' => 2000
    ],       
    [
        'name' => 'Smart Kids',
        'author' => 'Mary Doe',
        'purchaseUrl' => 'http://exempple.com',
        'releaseYear' => 2024
    ],
    [
        'name' => 'Money talk to me',
        'author' => 'John Doe',
        'purchaseUrl' => 'http://exempple.com',
        'releaseYear' => 2000
    ]
];

$filteredBooks = array_filter($books, fn($book) => $book['releaseYear'] <= 1999);

require "index.view.php";
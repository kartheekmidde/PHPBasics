<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and Objects</title>
</head>
<body>
    <?php 
        class Book {
            var $title;
            var $author;
            var $pages;
        }

        $book1 = new Book;
        $book1->title = "Harry Potter";
        $book1->author = "Rowling";
        $book1->pages = 300;
        
        echo $book1 -> author . "<br>";
        
        $book2 = new Book;
        $book2->title = "3 idiots";
        $book2->author = "Chetan";
        $book2->pages = 200;
        
        echo $book2 -> author . "<br>";

    ?>
</body>
</html>
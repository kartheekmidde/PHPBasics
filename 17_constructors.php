<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructors</title>
</head>
<body>
    <?php 
    
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages) {
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "Rowling", 300);
        $book2 = new Book("3 Idiots", "Chetan", 200);

        echo $book1->author . "<br>";
        echo $book2->title . "<br>";
    ?>
</body>
</html>
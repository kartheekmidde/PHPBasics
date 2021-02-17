<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getter and Setters</title>
</head>
<body>
    <?php
        class Movie {
            public $title;
            private $rating;

            function __construct($title, $rating) {
                $this->title = $title;
                $this->rating = $rating;
            }

            function getRating() {
                return $this->rating;
            }

            function setRating($rating) {
                $this->rating = $rating;
            }
        }
        
        $movie1 = new Movie("Avengers", "PG-13");
        echo $movie1->getRating();
        
        // $movie1.setRating("Dog");
        // echo $movie1->getRating();
    ?>
</body>
</html>
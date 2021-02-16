<html>
    <head>
        <title>Basics 6</title>
    </head>
    <body>
        <?php 
            $friends = array("Namee", "Karen", 1, true, 4.5, "Kirti", "Ravi");
            echo $friends . "<br>";
            echo $friends[1] . "<br>";
            $friends[1] = "Tintin";
            echo $friends[1] . "<br>";
            
            $friends[4] = "Vijay";
            echo $friends[4] . "<br>";
            echo count($friends) . "<br>";
        ?>
    </body>
</html>
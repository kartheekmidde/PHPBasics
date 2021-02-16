<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
    <body>
        <form action="4_forms.php" method="get">
            Color: <input type="text" name="color"><br>
            Plural Noun: <input type="text" name="pluralNoun"><br>
            Celebrity: <input type="text" name="celebrity"><br>
            <input type="submit" value="Submit">
        </form>
        <br>

        <?php 
            $color = $_GET["color"];
            $plNoun = $_GET["pluralNoun"];
            $celeb = $_GET["celebrity"];

            echo "Roses are $color <br>";
            echo "$plNoun are blue <br>";
            echo "I love $celeb <br>";
        ?>
    </body>
</html>
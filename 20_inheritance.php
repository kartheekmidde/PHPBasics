<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php
        class Chef {
            function makeChicken() {
                echo "The chef is making Chicken. <br>";
            }

            function makeSalad() {
                echo "The chef is making Salad. <br>";
            }

            function makeSplDish() {
                echo "The chef is making special dish. <br>";
            }
        }

        class ItalianChef extends Chef {
            function makePasta() {
                echo "The chef is making Pasta. <br>";
            }
            function makeSplDish() {
                echo "The chef is making Pizza. <br>";
            }
        }

        $chef = new Chef();
        $chef->makeChicken();

        $italianChef = new Chef();
        // $italianChef->makeSplDish();
    ?>
</body>
</html>
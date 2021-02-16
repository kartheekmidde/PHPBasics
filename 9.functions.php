<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php 
        function sayHi($name, $age){
            echo "Hello $name. Your age is $age. <br>";
        }

        sayHi("Kartheek", 32);
        
        function cube($num){
            return pow($num, 3);
        }
        echo cube(7) . "<br>";
    ?>
</body>
</html>
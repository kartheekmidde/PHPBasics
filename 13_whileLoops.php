<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loops</title>
</head>
<body>
    <?php 
        $index = 1;
        while ($index <= 5) {
            echo "The value is " . $index . "<br>";
            $index++;
        }
        echo "<hr>";
        $ind = 80;
        do {
            echo "The value is " . $ind . "<br>";
            $ind++;
        } while ($ind <= 5);

        $val = 5;
        while ($val < 10): 
    ?>
        <br>
        <?php 
            echo "Test <br>";
            $val++;
        ?>
        <?php endwhile; ?>
</body>
</html>
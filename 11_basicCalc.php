<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calc</title>
</head>
<body>
    <form action="11_basicCalc.php" method="post">
        First Num: <input type="number" step="0.1" name="firstNum"> <br>
        Op: <input type="text" name="operator"> <br> 
        Second Num: <input type="number" name="secondNum"> <br>
        <input type="submit" value="Submit">
    </form>

    <?php 
        $num1 = $_POST["firstNum"];
        $num2 = $_POST["secondNum"];
        $op = $_POST["operator"];

        if ($op == '+'){
            echo $num1 + $num2;
        } elseif($op == '-'){
            echo $num1 - $num2;
        }elseif($op == '*'){
            echo $num1 * $num2;
        }elseif($op == '/'){
            echo $num1 / $num2;
        }else {
            echo "Invalid operator";
        }
    ?>
</body>
</html>
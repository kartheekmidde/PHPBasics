<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
    <body>
        <form action="3_forms.php" method="get">
            Number 1: <input type="number" name="num1"><br>
            Number 2: <input type="number" name="num2"><br>
            <input type="submit" value="Submit">
        </form>

        <?php echo $_GET["num1"] + $_GET["num2"] ?>
    </body>
</html>
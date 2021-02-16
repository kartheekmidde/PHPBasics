<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
    <body>
        <!-- Getting User Input -->
        <form action="2_forms.php" method="get">
            Name: <input type="text" name="uname">
            <br>
            Age: <input type="number" name="age">
            <input type="submit" value="Submit">
        </form>
        <br>
        <!-- Fetching the field based on the name attribute -->
        Your name is <?php echo $_GET["uname"] ?>
        <br>
        Your age is <?php echo $_GET["age"] ?>
    </body>
</html>
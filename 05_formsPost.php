<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
    <body>
        <form action="05_formsPost.php" method="post">
            Password: <input type="password" name="password">
            <input type="submit" value="Submit">
        </form>
        <br>
        <?php 
            echo $_POST["password"];
        ?>
    </body>
</html>
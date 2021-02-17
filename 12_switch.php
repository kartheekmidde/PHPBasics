<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="12_switch.php" method="post">
        Grade: <input type="text" name="grade" id="grade"><br>
        <input type="submit" value="Submit">
    </form>
    <?php 
        $grade = $_POST["grade"];
        switch($grade) {
            case "A":
                echo "You did amazing! <br>";
                break;
            case "B":
                echo "You did pretty good! <br>";
                break;
            default:
                echo "You can do better! <br>";
        }
    ?>
</body>
</html>
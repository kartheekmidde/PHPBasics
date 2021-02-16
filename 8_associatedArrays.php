<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics 8</title>
</head>
<body>
    <form action="8_associatedArrays.php" method="post">
        Name: <input type="text" name="sname">
        <input type="submit" value="submit">
    </form>
    <?php 
        $grades = array("Jim"=>"A+", "Pam"=> "B-", "Sam"=>"A-");
        echo $grades["Jim"] . "<br>";
        $grades["Pam"] = "B+";
        echo $grades["Pam"] . "<br>";

        $sname = $_POST["sname"];
        echo "The grade of $sname is $grades[$sname]" . "<br>";
    ?>
</body>
</html>
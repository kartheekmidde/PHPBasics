<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loops</title>
</head>
<body>
    <?php 

        // This is a comment
        /* 
        This is a group comment line 
        This is a group comment line
        */
        for ($i = 1; $i <= 5; $i++){
            echo "The value is $i. <br>";
        }

        $arr = array(3, 5, 12, 55, 2);
        for ($i = 0; $i < count($arr); $i++){
            echo "The element at index $i is $arr[$i]. <br>";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else</title>
</head>
<body>
    <?php 
        $isMale = true;
        $isTall = false;
        if ($isMale && $isTall){
            echo "You are a tall male.<br>";
        } elseif ($isMale && !$isTall) {
            echo "You are a short male.<br>";
        } else {
            echo "You are not male or you are not tall.<br>";
        }

        function getMax($num1, $num2){
            if ($num1 > $num2) {
                return $num1;
            } else {
                return $num2;
            }
        }

        echo getMax(3, 90);
    ?>
</body>
</html>
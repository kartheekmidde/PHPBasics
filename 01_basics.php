<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics</title>
</head>
    <body>
        <?php 
        
            // Basic echo/print
            echo "<h1>Kartheek's site</h1>";
            echo "This is my site <br >";
            echo "<hr>";
            
            // Variables and Data types
            echo "<h3>Variables and Data Types</h3>";
            $charName = "George";
            $charAge = 80;
            $charGpa = 3.91;
            $charGender = 'M';
            $charIsAlive = true;
            $charInput = null;
            echo "There was once a man named $charName <br >";
            echo "$charName is $charAge years old. <br >";
            echo "$charName GPA is  $charGpa. <br >";
            echo "$charName is $charGender. <br >";
            echo "Is $charName alive : $charIsAlive <br >";
            echo "How is null stored = $charInput <br >";
            echo "<hr>";
            
            //Strings
            echo "<h3>Strings</h3>";
            $phrase = "I am learning PHP";
            
            echo $phrase . " <br >";
            echo strtolower($phrase) . " <br >";
            echo strtoupper($phrase) . " <br >";
            echo strlen($phrase) . " <br >";
            echo "Kartheek"[0] . " <br >";
            echo $phrase[0] . " <br >";
            
            $phrase[0] = "Y";
            echo $phrase . "<br >";
            echo str_replace("PHP", "P H P", $phrase) . "<br />";
            echo $phrase . "<br />";
            echo substr($phrase, 2, 2) . "<br />";
            echo substr($phrase, 2, -1) . "<br />";
            echo substr($phrase, 2, -3) . "<br />";
            echo "<hr>";
            
            // Numbers
            echo "<h3>Numbers</h3>";
            echo 40 . "<br />";
            echo -30  . "<br />";
            echo 3.98  . "<br />";
            echo 3.98 + 3.8 . "<br />";
            echo 10 % 3 . "<br />";
            echo 4 + 5 * 3 . "<br />";
            echo "<br />";
            
            $num = 10;
            $num++;
            echo $num . "<br />";
            $num += 25;
            echo $num . "<br />";
            echo "<br />";
            
            echo abs(-100.25) . "<br />";
            echo pow(2, 3) . "<br />";
            echo sqrt(144) . "<br />";
            echo max(14, 29) . "<br />";
            echo min(14, 29) . "<br />";
            echo round(7.49) . "<br />";
            echo ceil(2.39) . "<br />";
            echo floor(2.39) . "<br />";
            echo "<hr>";
        ?>
    </body>
</html>
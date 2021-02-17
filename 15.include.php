<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <?php include "15.header.html"; ?>
    <p>Body of the file</p>
    
    <?php 
        $title = "My PHP tutorials";
        $author = "Kartheek";
        $wordCount = 30;
        include "15.article-header.php"
    ?>

    <br>
    <?php 
        include "15.useful-tools.php";
        sayHi("Jim");
        echo $feetInMile;
    ?>


    <?php include "15.footer.html" ?>
</body>
</html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="5_formsPost.php" method="post">
            Password: <input type="password" name="password">
            <input type="submit" value="Submit">
        </form>
        <br>
        <?php 
            echo $_POST["password"];
        ?>
    </body>
</html>
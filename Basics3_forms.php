<html>
    <head>
        <title>Basic Calculator</title>
    </head>
    <body>
        <form action="Basics3_forms.php" method="get">
            Number 1: <input type="number" name="num1"><br>
            Number 2: <input type="number" name="num2"><br>
            <input type="submit" value="Submit">
        </form>

        <?php echo $_GET["num1"] + $_GET["num2"] ?>
    </body>
</html>
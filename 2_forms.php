<html>
    <head></head>
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
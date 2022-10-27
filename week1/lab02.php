<html>

<head>
    <title>Expression Example</title>

<body>
    <!-- PHP Variables -->
    <?php
    $gr1 = 50;
    $gr2 = 100;
    $gr3 = 75;
    $aver = ($gr1 + $gr2 + $gr3) / 3;
    print "The average is $aver";
    ?>

    <!-- Create a Basic form -->
    <form action="" method="POST">Click submit to start our initial PHP program.
        <br>
        <input type="text" name="Name">
        <br>
        <input type="submit" value="Click To Submit">
        <input type="reset" value="Erase and Restart">
    </form>

    <!-- Create a Registration form -->
    <form action="Form4Radio.php" method="POST">
        <br>
        Enter email address: <input type="text" size="16" maxLength="30" name="email">
        <br></br>
        May we contact you?
        <input type="radio" name="contact" value="Yes">
        <input type="radio" name="contact" value="No">
        <br></br>
        <input type="submit" value="Click to Submit">
        <input type="reset" value="Erase and Restart">
    </form>
</body>
</head>

</html>
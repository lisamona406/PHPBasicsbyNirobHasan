<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment and Decrement Operators</title>
</head>
<body>
    <h3>Increment/Decrement Operators: ++$x, $x++, --$x and $x--</h3>
    <?php

        echo "<h4>Post Increment</h4>";
        $x = 5;
        echo $x++;
        echo "<br>";
        echo $x;

        echo "<h4>Pre Increment</h4>";
        $x = 5;
        echo ++$x;
        echo "<br>";
        echo $x;

        echo "<h4>Post Decrement</h4>";
        $x = 5;
        echo $x--;
        echo "<br>";
        echo $x;

        echo "<h4>Pre Decrement</h4>";
        $x = 5;
        echo --$x;
        echo "<br>";
        echo $x;

    ?>
</body>
</html>
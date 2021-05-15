<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operator</title>
</head>
<body>
    <h3>Comparison Operator: ==, ===, !=, !==, >, <, <>, >= and <= </h3>
    <?php

        $x = 100;
        $y = "100";
        var_dump($x);
        echo "<br>";
        var_dump($x == $y);
        echo "<br>";
        var_dump($x === $y);
        echo "<br>";
        var_dump($x != $y);
        echo "<br>";
        var_dump($x !== $y);
        echo "<br>";
        // <> is same as !=.
        var_dump($x <> $y);
        echo "<br>";
        $x = 100;
        $y = 10;
        var_dump($x > $y);
        echo "<br>";
        var_dump($x < $y);
        echo "<br>";
        var_dump($x >= $y);
        echo "<br>";
        var_dump($x <= $y);
    ?>
</body>
</html>
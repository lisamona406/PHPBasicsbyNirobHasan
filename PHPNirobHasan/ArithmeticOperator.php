<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operator</title>
</head>
<body>
    <?php
        echo "<h3>Arithmetic Operators: +,-,*,/,%</h3>";
        $x = 20;
        $y = 50;
        echo $x + $y;
        echo "<br>";
        echo $x - $y;
        echo "<br>";
        echo $x/$y;
        echo "<br>";
        echo $x * $y;
        echo "<br>";
        echo $x % $y;

        $z = $x + $y;
        echo "<br>".$z;
    ?>
</body>
</html>
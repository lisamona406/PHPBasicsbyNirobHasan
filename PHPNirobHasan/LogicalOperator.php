<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operator</title>
</head>
<body>
    <h3>Logical Operator: and, or, xor, &&, ||, !$x</h3>
    <?php

        $x = 20;
        $y = 10;

        if($x == 20 && $y == 10) {
            echo "True";
        } else {
            echo "False";
        }

        echo "<br>";
        $x = 20;
        $y = 5;

        if($x == 20 || $y == 10) {
            echo "True";
        } else {
            echo "False";
        }

         echo "<br>";
        $x = 20;
        $y = 5;

        // if both condition is true, it will show "False". Similarly, if both condition is false, it will show "False". One of the condition has to be true, to show "True".
        if($x == 20 xor $y == 5) {
            echo "True";
        } else {
            echo "False";
        }


    ?>
</body>
</html>
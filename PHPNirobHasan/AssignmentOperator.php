<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Operator</title>
</head>
<body>
    <h3>Assignment Operators: =, +=, -=, *=, /= and %=</h3>
    <?php

        $x = 50;
        $x += 10;
        echo $x. "<br>"; // 60
        $x /= 10;
        echo $x. "<br>"; // 6
        $x *= 5;
        echo $x. "<br>"; // 30
        $x %= 9; 
        echo $x. "<br>"; // 3
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operator</title>
</head>
<body>
    <?php

        $x = "Hello World";
        echo $x;
        echo "<br>";
        echo strlen($x);
        echo "<br>";
        echo str_word_count($x);
        echo "<br>";
        echo strrev($x);

        echo "<h3>Search about 'PHP String' functions in Google</h3>";

        echo "<br>";

        $x = "Hello";
        echo "$x World";
        echo "<br>";
        echo "'$x' World!";
        echo "<br>"
        
    ?>
</body>
</html>
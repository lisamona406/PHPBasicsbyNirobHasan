<?php

    $cars = array("Volvo", "BMW", "Toyota");

    echo "I like ". $cars[0] . ", ". $cars[1]." and ". $cars[2];

    $arrlength = count($cars);
    echo "<br>". $arrlength;
    echo "<br>";
    for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
?>
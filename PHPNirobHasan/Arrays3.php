<?php

    $cars = array( array("Volvo", 22,2017), 
            array("BMW", 83,2007 ),
            array("Lamborgini", 38, 2020));
    
    print_r($cars);
    echo $cars[0] [0];
    echo "<br>";
    echo $cars[0] [1];
    echo "<br>";
    echo $cars[0] [2];
    echo "<br>";
    echo $cars[1] [0];
    echo "<br>";
    echo $cars[1] [1];
    echo "<br>";
    echo $cars[1] [2];
    echo "<br>";
    echo $cars[2] [0];
    echo "<br>";
    echo $cars[2] [1];
    echo "<br>";
    echo $cars[2] [2];
    echo "<br>";


    for ($row = 0; $row < 3; $row++) {
        echo "<p> <b>Row number: $row</b></p>";
    }

    echo "<br>";
    for ($row = 0; $row < 3; $row++) {
        echo "<p> <b>Row number: $row</b></p>";
        echo "<ul>";
            for($col = 0; $col < 3; $col++) {
                echo "<li>" .$cars[$row][$col].  "</li>";
            }
        echo "</ul>";
    }

?>
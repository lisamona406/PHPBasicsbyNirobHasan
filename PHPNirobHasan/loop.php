<?php 
    $x = 0. ;
    echo 1 ;
    echo 2;
    echo 3;
    echo 4;
    echo 5;
    echo 6;

    echo "<br>";
    while ($x <= 5) {
        echo $x. "<br>";
        $x++;
    }

    echo "<br>";
    $x = 0;
    do {
        echo $x. "<br>";
        $x++;
    } while ($x <= 5);

    echo "<br>";
    for ($x = 0; $x <= 5; $x++) {
        echo "$x <br>";
    }

    echo "<br>";
    echo "<h3>foreach loops only works in array.</h3>";
    $colors = array("red", "blue", "green", "yellow");
    echo $colors[0]. "<br>"; // red
    echo $colors[1]. "<br>"; // blue
    echo $colors[2]. "<br>"; // green
    echo $colors[3]. "<br>";  // yellow
    echo $colors[4]. "<br>";  // undefined array.

    print_r($colors);
    echo "<br>";
    foreach($colors as $value) {
        echo "$value <br>";
    }
?>
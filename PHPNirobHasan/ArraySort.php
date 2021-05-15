<?php
    $carNames = array("Volvo", "BMW", "Lamborgini");
    $numbers = array(250,63, 100);
    // sorting the cars array
    sort($carNames);
    sort($numbers);
    for($i = 0; $i < 3; $i++) {
        echo $carNames[$i]."<br>";
        
    }
    for($i = 0; $i < 3; $i++) {
        echo $numbers[$i]."<br>";
    }
    rsort($carNames);
    rsort($numbers);
    echo "<br>";
    for($i = 0; $i < 3; $i++) {
        echo $carNames[$i]."<br>";
        
    }
    for($i = 0; $i < 3; $i++) {
        echo $numbers[$i]."<br>";
    }
    echo "<br>";
    $age=array("Peter"=>"80","Ben"=>"37","Joe"=>"43");

    foreach($age as $x=>$x_value)
        {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
    echo "<br>";
    // asort will sort on the basis of values in associative array.
    asort($age); 
     foreach($age as $x=>$x_value)
        {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
    echo "<br>";
    // ksort will sort on the basis of keys in associative arrays.
    ksort($age); 
     foreach($age as $x=>$x_value)
        {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }


?>
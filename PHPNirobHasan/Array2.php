<?php
    $cars = array("Nadia"=> "01", "Roha"=>"03", "Shobuj"=> "010", "Maisie"=>"017");
    echo $cars["Nadia"]. "<br>";
    echo $cars["Roha"]. "<br>";
    echo $cars["Shobuj"]. "<br>";
    echo $cars["Maisie"]. "<br>";

    foreach($cars as $index=>$info) {
        //echo "$index = $info";
        echo "Index name = $index and Roll = $info";
        echo "<br>";
    }
?>
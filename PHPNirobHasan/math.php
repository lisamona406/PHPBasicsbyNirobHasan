<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Math</title>
</head>
<body>
    <section>pow,sqrt,cos,rand,%,increment and decrement</section>
    Power: <?php echo pow(2,5)."<br>";
                 
          ?>
    Power: <?php echo pow(3,2)."<br>";?>
    SQRT: <?php echo sqrt(9)."<br>";?>
    SQRT: <?php echo sqrt(2)."<br>";?>
    Cos: <?php echo cos(90)."<br>";?>
    Sin: <?php echo sin(9)."<br>";?>
    Random: <?php 
    // it will take 11 digits randomly.
    echo rand()."<br>";?>
    Random: <?php 
    // it will take random numbers from 1 to 25.
    echo rand(1,25)."<br>";?>
    %: <?php echo 10%3; 
            echo "<br>";
        ?>
        
    %: <?php echo 3%3;?>
        <?php
            echo "<br>";
            echo 10-7;
            echo "<br>";
        ?>

    Increment/Decrement: <?php
               
                $x = 10;
                $x++;
                echo $x;
                ?>


</body>
</html>
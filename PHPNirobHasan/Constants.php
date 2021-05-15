<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants</title>
</head>
<body>
    <section>String reverse and Constants</section>
     
    <?php
        echo "<h2>Reversing a String:</h2>";
        $x = "PHP is great";
        echo $x. "<br>";
        echo strrev($x);
    ?>
    <?php
        
        //define(constant 's name, constant 's value, you can add a boolean as a third parameter if you want to make it a insensitve case);
        echo "<h2>Constants</h2>";
        define("Nadia", "I am a student");
        echo  Nadia;
        echo "<br>";
        define ("Area", 500);
        echo Area;

        function RepeatDefine() {
            echo "<br>";
            echo Nadia;
        }
        RepeatDefine();

         function RepeatDefine1() {
            echo "<br>";
            return Nadia;
        }
        echo RepeatDefine1();
    ?>
</body>
</html>
<?php

$x = 383;
    function TeSt() {
        $a = 10;
        echo $a;
        echo "<br>";
        global $x; // it is used inorder to use $x.
        echo "Access from test =".$x; // It will give error, because it is not a local variable in TeSt() when you do not mention 'global $x' in your function
        echo "<br>";
    }
    function TeSt1() {
        echo "<br>";
        global $x;
        $b = 99;
        echo $b;
        echo "<br>";
        echo $a; // it will give error because $a is a local variable in TeSt().
        echo "Access from Test1 =".$x;
    }
    TeSt();
    TeSt1();

?>
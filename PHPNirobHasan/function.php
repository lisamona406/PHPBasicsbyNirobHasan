<?php

    /*
    function nadia() {
        echo "My name is Nadia";
    }
    nadia();
    nadia("Nadia");
    */

    $lname = "Islam"; // it is a local scope.
    function nadia($fname) {
        // inorder for the function to access $lname, make it global.
        global $lname;
        echo "My name is $fname $lname ";
    }
    nadia("Nadia");
    echo "<br>";

    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    echo addNumbers(5,5);
    echo "<br>";

    function setHeight(int $minHeight = 50) {
        echo "The height is : $minHeight";
        echo "<br>";
    }
    setHeight(150);
    setHeight();
?>
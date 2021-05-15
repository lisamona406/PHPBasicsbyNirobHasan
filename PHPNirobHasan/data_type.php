<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Type</title>
</head>
<body>
<section>String, Integer, Float, Boolean</section>
<br>

<?php
$a="nadia islam ";
$b = "I am a student.";
echo $b;
echo "<br>";
echo $a.$b;
echo "<br>";
echo $a. " ".$b;
echo "<br>";
echo strtoupper($a);
echo "<br>";
echo strtolower($a);
echo "<br>";
echo ucfirst($a);
echo "<br>";
echo strlen($a);
echo "<br>";
echo "$a $b";
echo "<br>";
echo '$a $b';

$c = "nadia 'islam'";
echo "<br>". $c;
echo "<br>";
$c = 'nadia "islam"';
echo $c;

$c = 'nadia \'islam\'';
echo "<br>";
echo $c;

$s = 20;
echo "<br>";
var_dump($s);
echo "<br>";
$s = "20";
var_dump($s);
$s=20.56;
echo "<br>";
var_dump($s);
$s = true;
echo "<br>";
var_dump($s);
echo "<br>";
$s = false;
var_dump($s);

?>
    
</body>
</html>
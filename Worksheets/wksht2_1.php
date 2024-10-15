
<h1>Q1</h1>
<?php
    print("Hello World");
?>
<h1>Q2</h1>
<?php
    $foo = true;
    $age = 21;
    $height = 1.7;
    print("Boolean Foo is filled with: $foo <br>");
    print("I am $age years old <br>");
    print("I am $height"."m long <br>");
?>
<h1>Q3</h1>
<?php
    $num1 = 5;
    $num2 = 7;
    print("The sum of $num1 and $num2 is: ".($num1+$num2));
    print("The Difference of $num1 and $num2 is: ".($num1-$num2));
    print("The Product of $num1 and $num2 is: ".($num1*$num2));
    print("The Division of $num1 and $num2 is: ".($num1/$num2));
?>
<h1>Q4</h1>
<?php
    $a = 20;
    $b = 10;
    $c = $b-$a;
    print($b." - ".$a." = ".$c);
?>
<h1>Q5</h1>
<?php
    $name = "Joseph";
    $surname = "Borg";
    $fullname = $name." ".$surname;
    print("My name is: $fullname");
?>
<h1>Q6</h1>
<?php
    // declare PI as a Constant
    define("PI", 3.142);
    $radius = 5;
    $answer = PI * $radius * $radius;
    print("The area of a circle with radius $radius is: $answer");
?>
<h1>Q7</h1>
<?php
    $cent = 50;
    $inInches = $cent / 2.54;
    print("$cent centimeters is equal to $inInches inches");
?>
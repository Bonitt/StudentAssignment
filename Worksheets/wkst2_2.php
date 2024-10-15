<h1>Q1</h1>
<?php
    $arrayMarks = array(40,50,45,60,50);
    $sum;
    for ($i = 0; $i < count($arrayMarks); $i++) {
        $sum += $arrayMarks[$i];
    }
    $mean = $sum / count($arrayMarks);
    print("Number of elements: " . count($arrayMarks) . "<br>");
    print("Sum: $sum <br>");
    print("Mean: $mean"."<br>");
    function calc($array) {
        $sum = array_sum($array);
        return $sum / count($array);
    }

    print("Mean: ".calc($arrayMarks));
    
?>
<h1>Q2</h1>
<?php
    // Age check
    $age = 22; // Initialize age variable
    
    if ($age >= 18) {
        echo "You are " . $age . " years old. You are allowed to enter the club.";
    } else {
        echo "You are " . $age . " years old. You are not allowed to enter the club.";
    }
    
    echo "<br>"; // Add a line break for better readability
    
    // Password check
    $password = "ginger"; // Initialize password variable
    
    if ($password === "ginger") {
        echo "Correct password! Access granted.";
    } else {
        echo "Incorrect password. Access denied.";
    }
    
?>
<h1>Q3</h1>
<?php
    // Generate a random number between 1 and 10
$randomNumber = rand(1, 10);

// Get the user's guess
echo "Guess a number between 1 and 10: ";
$guess = trim(fgets(STDIN));

// Check if the guess is correct
if ($guess == $randomNumber) {
    echo "You won!";
} else {
    echo "You lose, try again!";
}
?>
<h1>Q4</h1>
<?php
    // Generate three random numbers between 1 and 3
    $number1 = rand(1, 3);
    $number2 = rand(1, 3);
    $number3 = rand(1, 3);

    // Display the generated numbers
    echo "Slot machine results: " . $number1 . " " . $number2 . " " . $number3 . "\n";

    // Check if all numbers are the same
    if ($number1 === $number2 && $number2 === $number3) {
        echo "Congratulations! You won!";
    } else {
        echo "Sorry, you didn't win this time.";
    }
?>
<h1>Q5</h1>
<?php
    // Display numbers from 1 to 10
    echo "Numbers from 1 to 10:\n";
    for ($i = 1; $i <= 10; $i++) {
        echo $i . " ";
    }
    echo "\n";

    // Display numbers from 10 down to 1
    echo "Numbers from 10 down to 1:\n";
    for ($i = 10; $i >= 1; $i--) {
        echo $i . " ";
    }
    echo "\n";
?>
<h1>Q6</h1>
<?php
    echo "Even numbers from 1 to 50:\n";

    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    
    echo "\n";
    
?>
<h1>Q7</h1>
<?php

    // Using a for loop
    echo "1..2..3..4..5..6..7..8..9..10 (for loop)\n";
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "..";
    }
    echo "\n";

    // Using a while loop
    echo "1..2..3..4..5..6..7..8..9..10 (while loop)\n";
    $i = 1;
    while ($i <= 10) {
        echo $i . "..";
        $i++;
    }
    echo "\n";

    // Using a do-while loop
    echo "1..2..3..4..5..6..7..8..9..10 (do while loop)\n";
    $i = 1;
    do {
        echo $i . "..";
        $i++;
    } while ($i <= 10);
    echo "\n";

?>

<h1>Q8</h1>
<?php

    // Using a for loop
    echo "Multiplication table of 8 (for loop):\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "8 x $i = " . (8 * $i) . "\n";
    }
    echo "\n";

    // Using a while loop
    echo "Multiplication table of 8 (while loop):\n";
    $i = 1;
    while ($i <= 10) {
        echo "8 x $i = " . (8 * $i) . "\n";
        $i++;
    }
    echo "\n";

    // Using a do-while loop
    echo "Multiplication table of 8 (do-while loop):\n";
    $i = 1;
    do {
        echo "8 x $i = " . (8 * $i) . "\n";
        $i++;
    } while ($i <= 10);
    echo "\n";

?>

<h1>Q9</h1>
<?php

    // Initialize an empty array with 10 elements
    $myArray = array_fill(0, 10, 0);
    
    // Fill the array with random values from 1 to 10
    for ($i = 0; $i < 10; $i++) {
        $myArray[$i] = rand(1, 10);
    }
    
    // Display the array elements in the specified format
    for ($i = 0; $i < 10; $i++) {
        echo "Array element $i. Value contained is " . $myArray[$i] . "\n";
    }
    
?>
<h1>Q10</h1>
<?php
    $i = 6;

    while ($i <= 20) {
        echo $i . " ";
        $i += 2; // Increment by 2 to get the next even number
    };
?>
<h1>Q11</h1>
<?php
    $i = 100;

    while ($i >= 0) {
        echo $i . " ";
        $i -= 10; // Decrement by 10 to move down in steps of 10
    }
    
?>
<h1>Q12</h1>
<?php
    $i = 6;

    do {
        echo $i . " ";
        $i += 2; // Increment by 2 to get the next even number
    } while ($i <= 20);
?>
<h1>Q13</h1>
<?php
    $i = 100;

    do {
        echo $i . " ";
        $i -= 10; // Decrement by 10 to move down in steps of 10
    } while ($i >= 0);
?>
<h1>Q14</h1>
<?php
    $counter = 0;

    while (true) {
        echo "Counter: " . $counter . "\n";
        $counter++;
    
        if ($counter == 10) {
            break; // Exit the loop when counter reaches 10
        }
    }
    
    echo "Loop finished!\n";
?>
<h1>Q15</h1>
<?php
    for ($i = 0; $i <= 4; $i++) {
        if ($i == 2) {
            continue; // Skip to the next iteration when $i is 2
        }
        echo $i . " ";
    }
?>

<h1>Q16</h1>
<?php
    $destination = rand(1, 10); // Generate a random number between 1 and 10

    switch ($destination) {
        case 1:
            echo "Going to Las Vegas";
            break;
        case 2:
            echo "Going to Amsterdam";
            break;
        case 3:
            echo "Going to Egypt";
            break;
        case 4:
            echo "Going to Tokyo";
            break;
        default:
            echo "Going nowhere";
    }
?>




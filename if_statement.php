<?php

// if statement is a control structure in PHP that allows you to execute a block of code only if a specified condition is true. It is used to make decisions in your code and control the flow of execution based on certain conditions.

// if statement = if some condition is true, do something. If the condition is false, do nothing.
// if statement by default only executes the code block if the condition is true. If the condition is false, it simply skips the code block and continues with the rest of the program.

// Example of if statement  
$age = 16;
if ($age >= 18) {
    echo "You are an adult. <br>";
} else {
    echo "You are a minor. <br>";
}


// ============================================================
//            COMPUTATION FOR WEEKLY PAY USING IF STATEMENT
// ============================================================
$hours = 40;
$rate = 15;
$weekly_pay = null;

if ($hours <= 40) {
    $weekly_pay = $hours * $rate;
} 

echo "Your weekly pay is: $" . $weekly_pay;

?>


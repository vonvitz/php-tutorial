<?php

// Switch Statement = replacement to using many else if statements. It is used when you want to compare a variable with many different values. It is more efficient than using many else if statements.


$grade = "C";

if($grade == "A")
{
    echo "You are a genius. <br>";
}
else if($grade == "B")
{
    echo "You are smart. <br>";
}
else if($grade == "C")
{
    echo "You are average. <br>";
}
else if($grade == "D")
{
    echo "You are below average. <br>";
}
else if($grade == "F")
{
    echo "You are failed. <br>";
}
else
{
    echo "Invalid grade. <br>";
}


// Eto ang mas efficient na paraan gamit ang switch statement.

switch($grade)
{
    case "A":
        echo "You are a genius. <br>";
        break;
    case "B":
        echo "You are smart. <br>";
        break;
    case "C":
        echo "You are average. <br>";
        break;
    case "D":
        echo "You are below average. <br>";
        break;
    case "F":
        echo "You are failed. <br>";
        break;
    default:
        echo "Invalid grade. <br>";
}
?>
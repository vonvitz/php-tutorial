<?php

    // Logical operators = combine conditional statements. They are used to create more complex conditions by combining multiple conditions together. The most common logical operators in PHP are:

    // if (condition1 && condition2) and 
    // if (condition1 || condition2) or
    // if (condition1 != condition2) not equal to
    // if (condition1 <> condition2) not equal to
    // if (!condition1) not  : True if false . False if true
    
     
    $temp = 100;

    if($temp >= 0 )
    {
        echo "The weather is good. <br>";
        exit(); // hindi na nya itututloy kapag naka exit na siya. It will stop the execution of the script.
    }

    if($temp >= 0 )
    {
        echo "The weather is bad. <br>";
    }


?>
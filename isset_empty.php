<?php

    // isset() = determine if a variable is set and is not NULL. It returns true if the variable exists and has a value other than NULL, and false otherwise.

    // empty() = determine whether a variable is empty. It returns true if the variable does not exist or if its value is empty. The following values are considered empty:

        
    // RETURN FALSE IF THE VARIABLE IS EMPTY. THE FOLLOWING VALUES ARE CONSIDERED EMPTY:
    // "" (an empty string) 
    // 0 (0 as an integer)
    // 0.0 (0 as a float)   
    // "0" (0 as a string)
    // NULL
    // FALSE
    // array() (an empty array)
    // $var; (a variable declared, but without a value)
    

    $username = null; // empty array

    if(isset($username))
    {
        echo "variable Username is set. <br>";
    }
    else
    {
        echo "variable Username is not set. <br>";
    }   

    if(empty($username))
    {
        echo "variable Username is empty. <br>";
    }
    else
    {
        echo "variable Username is not empty. <br>";
    }

?>
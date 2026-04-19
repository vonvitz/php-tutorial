<?php
    // Arrays = variable that can store multiple values. It is used to store a collection of data. It can be indexed or associative. Indexed arrays are arrays that use numeric indexes to access the values. Associative arrays are arrays that use named keys to access the values.

    $food_1 = "apple";
    $food_2 = "banana"; 
    $food_3 = "orange";
    $food_4 = "grape";

    // Indexed Array
    $fruits = array("Apple", "Banana", "Orange");
    echo $fruits[0] . "<br>"; // Output: Apple
    echo $fruits[1] . "<br>"; // Output: Banana
    echo $fruits[2] . "<br>"; // Output: Orange

    echo "<hr>";

    // Associative Array
    $person = array("name" => "John", "age" => 30, "city" => "New York");
    echo $person["name"] . "<br>"; // Output: John
    echo $person["age"] . "<br>"; // Output: 30
    echo $person["city"] . "<br>"; // Output: New York

    echo "<hr>";

    array_push($fruits, "Grape"); // Output: Array ( [0] => Apple [1] => Banana [2] => Orange [3] => Grape )
    array_pop($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Orange )
    array_shift($fruits); // Output: Array ( [0] => Banana [1   

    // array_reverse($fruits); // Output: Array ( [0] => Orange [1] => Banana )

    echo "Count : " . count($fruits) . "<br>"; // Output: 3

    echo "<hr>";
    foreach($fruits as $fruit)
    {
        echo $fruit . "<br>";
    }

    echo "<hr>";
    echo "<strong><i>Associative Array<i/></strong><br>";
    foreach($person as $key => $value)
    {
        echo $key . ": " . $value . "<br>";
    }
?>
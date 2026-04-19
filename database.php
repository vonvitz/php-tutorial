<?php

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'test_db';

    try {
        //code...
         $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
         
    } catch (mysqli_sql_exception $e) {
        echo "Connection failed: " . $e->getMessage();
    }
   
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } else {
       echo "Connected successfully";
   }





?>
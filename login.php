<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username === 'admin' && $password === 'password')
        {
            echo "Login successful! Welcome, {$username}. <br>";
        }
        else
        {
            echo "Login failed! Invalid username or password. <br>";
        }
    }
    else
    {
        echo "Please enter your username and password.";
    }

    foreach($_POST as $key => $value)
    {
        echo "{$key} : {$value} <br>";
    }

?>
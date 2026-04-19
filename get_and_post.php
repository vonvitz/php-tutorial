<?php

    //$_GET AND $_POST are superglobal variables in PHP that are used to collect data from HTML forms.

    // <form method="get" action="get_and_post.php">
    //     <input type="text" name="username" placeholder="Enter your username">    


    // $_GET is appended to the URL and is visible to the user, while $_POST is sent in the HTTP request body and is not visible in the URL.

    // NOT SECURE FOR SENSITIVE DATA, USE $_POST INSTEAD OF $_GET FOR SENSITIVE DATA LIKE PASSWORDS OR PERSONAL INFORMATION.

    // BOOKMARK IS POSSIBLE WITH VALUES 
    // GET REQUEST CAN BE CACHED BY BROWSERS, WHILE POST REQUESTS ARE NOT CACHED.
    // BETTER FOR A SEARCH PAGE 


    // $_POST is more secure for sensitive data, as it does not expose the data in the URL. It is commonly used for form submissions that involve sensitive information, such as login forms or payment forms.

    // * MORE SECURE 
    // * NOT VISIBLE IN URL
    // * NOT CACHED BY BROWSERS





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_and_post.php" method="post">
    <label for="username">Username:</label><br/>
        <input type="text" id="username" name="username"><br/>
        <label for="password">Password:</label><br/>
        <input type="password" id="password" name="password"><br/>
        <button type="submit">Submit</button>
    </form>


</body>
</html>

<?= "User Name&nbsp;&nbsp;&nbsp;: " . ($_POST['username'] ?? 'No username provided'); ?> <br>
<?= "Password&nbsp;&nbsp;&nbsp;: " . ($_POST['password'] ?? 'No password provided'); ?>

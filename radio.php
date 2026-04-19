<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label>
        <br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>
        <br>
        <input type="radio" name="gender" id="other" value="other">
        <label for="other">Other</label>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit']) && isset($_POST['gender']))
    {
        $gender = $_POST['gender'];    
        echo "You have selected: {$gender}";
    }
    else
    {
        echo "Please select a gender.";         
    }
?>
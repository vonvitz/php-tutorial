<?php 

// String Types
$name       =   "John Doe";

// Integer Types
$age        =   30;
$users      =   2;
$quantity   =   3;

// Float Types
$price      =   19.99;
$tax_rate   =   0.07;

// Boolean Types
$employed   =   true;
$online     =   false;

$food       =   "Pizza";
$total      =   null;

// dito nire assign natin ang total variable natin, yung value nya ay yung quantity multiplied by price
$total = $quantity * $price;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial Practice</title>
</head>
<body>
    <?= "Hello, " . $name . "!" ?><br/>
    <?= "your pizza is \${$price}" ?><br/>
    <?= "The sales tax rate is : {$tax_rate}%" ?><br/>

    <?= "Employed: " . ($employed ? "Yes" : "No") ?><br/>
    <?= "Online: " . ($online ? "Yes" : "No") ?><br/>
    <?= "{$employed}" ?> <br/>

    <?= "You have ordered {$quantity}pcs x {$food}"?><br/>
    <?= "Your total is: \${$total} " ?>
</body>
</html>
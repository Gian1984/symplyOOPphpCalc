<?php
    include "includes/autoloader.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
    <form action="includes/calc.inc.php" method="post">
    <p>My simply calculator</p>
    <input type="number" name="num1" placeholder="first number">
    <select name="operator">
        <option value="add">addiction</option>
        <option value="sub">subtraction</option>
        <option value="div">division</option>
        <option value="mul">multiply</option>
    </select>
    <input type="number" name="num2" placeholder="second number">
    <button type="submit" name="submit">Calculate</button>
    
    </form>


</body>
</html>
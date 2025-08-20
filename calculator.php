<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php" method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operation">
            <option value="add">Addition (+)</option>   
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>

<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    function add($num1, $num2) {
        $result = $num1 + $num2;
        echo "Result: " . $result;
    }

    function sub($num1, $num2) {
        $result = $num1 - $num2;
        echo "Result: " . $result;
    }

    function multi($num1, $num2) {
        $result = $num1 * $num2;
        echo "Result: " . $result;
    }

    function divide($num1, $num2) {
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            echo "Division by zero is not allowed.";
            exit();
        }
        echo "Result: " . $result;
    }

    switch ($operation) {
        case 'add':
            add($num1, $num2);
            break;
        case 'subtract':
            sub($num1, $num2);
            break;
        case 'multiply':
            multi($num1, $num2);
            break;
        case 'divide':
            divide($num1, $num2);
            break;
        default:
            echo "Invalid operation.";
            exit();
    }
?>
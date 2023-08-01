<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form method="post">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" name="send" value="Calculate Factorial">
    </form>
    <?php
    // Recursive function to calculate factorial
    function factorial($num) {
        if ($num <= 1) {
            return 1;
        } else {
            return $num * factorial($num - 1);
        }
    }

    if (isset($_POST['send'])) {
        $inputNum = $_POST['number'];
        $factValue = factorial($inputNum);
        echo "<p>The factorial of $inputNum is $factValue.</p>";
    }
    ?>
</body>
</html>
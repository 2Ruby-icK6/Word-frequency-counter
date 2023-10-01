<!DOCTYPE html>
<html>
<head>
    <title>Triangle Area Calculator</title>
</head>
<body>
    <h1>Triangle Area Calculator</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="side1"> SIDE 1: </label>
        <input type="number" name="side1" required>
        <label for="side2"> SIDE 2: </label>
        <input type="number" name="side2" required>
        <label for="side3"> SIDE 3: </label>
        <input type="number" name="side3" required>
        <input type="submit" value="Calculate"> <br> <br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $side1 = $_POST["side1"];
        $side2 = $_POST["side2"];
        $side3 = $_POST["side3"];

        $side_total = ($side1 + $side2 + $side3) / 2;

        $triangle = $side_total * ($side_total - $side1) * ($side_total - $side2) * ($side_total - $side3);
        
        $format = number_format($triangle, 2);
        
        echo "The area of the triangle is: $format";
    }
    ?>
</body>
</html>
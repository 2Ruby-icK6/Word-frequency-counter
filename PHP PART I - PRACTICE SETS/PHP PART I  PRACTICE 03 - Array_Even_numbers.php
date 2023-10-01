<!DOCTYPE html>
<html>
<head>
    <title>Even Number Array</title>
</head>
<body>
    <h1>Even Number Array</h1>

    <?php
    $x = 0;
    $matrix = [
        [12, 23, 34],
        [45, 55, 62],
        [71, 84, 90]
       ];

    $numRows = count($matrix);
    $numCols = count($matrix[0]);
    
    $x = 0;
    $y = 0;

    while ($x < $numRows) {
        while ($y < $numCols) {
            if ($matrix[$x][$y] % 2 == 0) {
                echo $matrix[$x][$y] . " ";
            }
            $y++;
        }
        $y = 0;
        $x++;
    }
    ?>
</body>
</html>
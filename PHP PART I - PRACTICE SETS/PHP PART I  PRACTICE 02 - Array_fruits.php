<!DOCTYPE html>
<html>
<head>
    <title>FRUIT ARRAY</title>
</head>
<body>
    <h1>Fruit Array</h1>
    <?php
    $fruits = ['avocado', 'apple', 'banana', 'Tomato', 'Papaya'];
    echo '<ol>';
    for ($x = 0; $x < count($fruits); $x++) {
        echo "<li>$fruits[$x]</li>";
       }
    echo '</ol>';
    ?>
</body>
</html>
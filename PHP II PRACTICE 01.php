<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PRACTICE 01</title>

</head>
<body>
    <h1>PRACTICE 01</h1>

    <?php

        // Poorly organized and hard-to-read code
        // Calculate the total price of items in a shopping cart
        $items = [
            ['name' => 'Widget A', 'price' => 10],
            ['name' => 'Widget B', 'price' => 15],
            ['name' => 'Widget C', 'price' => 20],
            ];
            $total = 0;
            foreach ($items as $item) {
            $total += $item['price'];
            }
            echo "Total price: $" . $total;
            // Perform a series of string manipulations

            $string = "This is a poorly written program with little
            structure and readability.";
            
            // Check if a number is even or odd
            $number = 42;
            if ($number % 2 == 0) {
            echo "\nThe number " . $number . " is even.";
            } else {
            echo "\nThe number " . $number . " is odd.";
            }

        /**
         * Calculate the total price of a list of items.
         *
         * This function takes an array of item prices and returns the total price.
         *
         * @param array $item_prices An array of item prices.
         * @return float The total price of all items.
         */

        function calculate_total_price(array $item_prices): float {
            $total_price = 0.0;
            
            foreach ($item_prices as $price) {
                $total_price +=$price['price'];
            }
            
            return $total_price;
        }

        $total_items_price = calculate_total_price($items);
        echo "\nTotal price of items calculated using the function: $" . $total_items_price;

       
    ?>
    
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Word Frequency Counter</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<h1>Word Frequency Counter</h1>

<form method="post" action="">
    <label for="text">Enter Text:</label><br>
    <textarea name="text" id="text" rows="10" cols="50"><?php echo isset($_POST['text']) ? $_POST['text'] : ''; ?></textarea><br>
    <label for="sort_order">Sort Order:</label>
    <select name="sort_order" id="sort_order">
        <option value="asc" <?php echo isset($_POST['sort_order']) && $_POST['sort_order'] === 'asc' ? 'selected' : ''; ?>>Ascending</option>
        <option value="desc" <?php echo isset($_POST['sort_order']) && $_POST['sort_order'] === 'desc' ? 'selected' : ''; ?>>Descending</option>
    </select><br>
    <label for="display_limit">Display Limit:</label>
    <input type="number" name="display_limit" id="display_limit" min="1" value="<?php echo isset($_POST['display_limit']) ? $_POST['display_limit'] : ''; ?>"><br>
    <input type="submit" value="Calculate">
</form>

<?php
function WordCounter($text, $Sort, $displayLimit) {
    $commonWord = ["the", "and", "in", "is", "to", "a", "an", "it", "on", "of"];
    
    $By_words = str_word_count(strtolower($text), 1);

    $filteredWords = array_diff($By_words, $commonWord);

    $WordCount = array_count_values($filteredWords);

    // Check for sorting order and sort accordingly
    if ($Sort === 'asc') {
        asort($WordCount);
    } else {
        arsort($WordCount);
    }

    $displayLimit = (int)$displayLimit;
    if ($displayLimit <= 0) {
        $displayLimit = PHP_INT_MAX;
    }

    $WordCount = array_slice($WordCount, 0, $displayLimit);
    return $WordCount;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];
    $Sort = $_POST['sort_order'];
    $displayLimit = $_POST['display_limit'];

    if (empty($text)) {
        echo "<p style='color: red;'>Please enter text.</p>";
    } else {
        $WordCount = WordCounter($text, $Sort, $displayLimit);

        echo "<table>";
        echo "<tr><th>Word</th><th>Frequency</th></tr>";
        foreach ($WordCount as $word => $frequency) {
            echo "<tr><td>$word</td><td>$frequency</td></tr>";
        }
        echo "</table>";
    }
}
?>


</body>
</html>

<!DOCTYPE html>
<html>
<body>

<form method="post">
    <label for="numbers">Enter numbers separated by commas:</label><br>
    <input type="text" id="numbers" name="numbers" placeholder="e.g., 1, 2, 3, 4"><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers_input = $_POST["numbers"];
    $numbers_array = explode(",", $numbers_input);
    $numbers = array_map('intval', $numbers_array);

    $min_value = min($numbers);
    $max_value = max($numbers);

    echo "<p>Minimum Value: $min_value</p>";
    echo "<p>Maximum Value: $max_value</p>";
}
?>

</body>
</html>

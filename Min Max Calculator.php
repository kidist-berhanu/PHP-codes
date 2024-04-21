<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 20px;
        }

        .result {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
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

    echo "<p class='result'>Minimum Value: $min_value</p>";
    echo "<p class='result'>Maximum Value: $max_value</p>";
}
?>

</body>
</html>

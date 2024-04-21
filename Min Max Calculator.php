<!DOCTYPE html>
<html>
<head>
    <style>
        /* CSS styles for the body */
        body {
            font-family: Arial, sans-serif; /* Set the font family */
            background-color: #f4f4f4; /* Set the background color */
            padding: 20px; /* Add padding */
        }

        /* CSS styles for the form */
        form {
            background-color: #fff; /* Set background color */
            padding: 20px; /* Add padding */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add shadow */
        }

        /* CSS styles for labels */
        label {
            font-weight: bold; /* Make text bold */
            color: #333; /* Set text color */
        }

        /* CSS styles for text input */
        input[type="text"] {
            width: 100%; /* Set width to 100% */
            padding: 8px; /* Add padding */
            margin-top: 5px; /* Add top margin */
            margin-bottom: 15px; /* Add bottom margin */
            border: 1px solid #ccc; /* Add border */
            border-radius: 4px; /* Rounded corners */
            box-sizing: border-box; /* Include padding and border in the width */
        }

        /* CSS styles for submit button */
        input[type="submit"] {
            background-color: #4CAF50; /* Set background color */
            color: white; /* Set text color */
            padding: 10px 20px; /* Add padding */
            border: none; /* Remove border */
            border-radius: 4px; /* Rounded corners */
            cursor: pointer; /* Change cursor to pointer on hover */
        }

        /* CSS styles for submit button on hover */
        input[type="submit"]:hover {
            background-color: #45a049; /* Change background color on hover */
        }

        /* CSS styles for result paragraphs */
        p {
            margin-top: 20px; /* Add top margin */
        }

        /* CSS styles for result text */
        .result {
            font-weight: bold; /* Make text bold */
            color: #333; /* Set text color */
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

    echo "<p class='result'>Minimum Value: $min_value</p>"; /* Display minimum value */
    echo "<p class='result'>Maximum Value: $max_value</p>"; /* Display maximum value */
}
?>

</body>
</html>

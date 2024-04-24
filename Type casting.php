<!DOCTYPE html>
<html>
<head>
    <title>Type Casting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            max-width: 400px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="value" placeholder="Enter the value">
        <select name="type">
            <option value="string">String</option>
            <option value="integer">Integer</option>
            <option value="float">Float</option>
            <option value="boolean">Boolean</option>
            <option value="object">Object</option>
        </select>
        <button type="submit" name="submit">Cast</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $value = $_POST['value'];
        $type = $_POST['type'];

        // Perform typecasts
        echo "<p>Casting '{$value}' to '{$type}':</p>";

        // Cast value to the selected type
        $castedValue = null;
        switch ($type) {
            case "string":
                $castedValue = (string) $value;
                break;
            case "integer":
                $castedValue = (int) $value;
                break;
            case "float":
                $castedValue = (float) $value;
                break;
            case "boolean":
                $castedValue = (bool) $value;
                break;
            case "object":
                $castedValue = (object) $value;
                break;
        }

        // Display the casted value
        echo "<p>Casted value: " . var_export($castedValue, true) . "</p>";
    }
    ?>

</body>
</html>

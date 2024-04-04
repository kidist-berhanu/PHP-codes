<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Right-Angle Triangle Pattern</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .triangle-container {
            text-align: center;
            margin-top: 20px;
        }

        .triangle-row {
            display: block;
            margin-bottom: 10px;
        }

        .triangle-asterisk {
            color: #ff9900;
        }
    </style>
</head>
<body>

<h2>Triangle Pattern</h2>

<div class="triangle-container">
    <?php
    $height = 5; // Height of the triangle

    for ($i = 1; $i <= $height; $i++) {
        echo '<div class="triangle-row">';
        // Printing asterisks
        for ($k = 1; $k <= $i; $k++) {
            echo '<span class="triangle-asterisk">*</span>';
        }
        echo '</div>';
    }
    ?>
</div>

</body>
</html>

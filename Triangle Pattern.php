<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Pattern</title>
</head>
<body>

<h2>Triangle Pattern</h2>

<?php
$height = 5; // Height of the triangle

for ($i = 1; $i <= $height; $i++) {
    // Printing spaces
    for ($j = $height - $i; $j > 0; $j--) {
        echo "&nbsp;";
    }
    // Printing asterisks
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>

</body>
</html>

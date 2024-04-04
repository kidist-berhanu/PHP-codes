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

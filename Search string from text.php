<!DOCTYPE html>
<html>
<body>

<!-- HTML form to accept user input -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Enter a sentence: <input type="text" name="sentence">
  <input type="submit">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the sentence input from the form
    $sentence = $_POST['sentence'];
    
    // Output the sentence provided by the user
    echo "You entered: " . $sentence . "<br>";
    
    // Use strpos to find the position of "world" in the sentence
    $position = strpos($sentence, "world");
    
    // Check if "world" was found in the sentence
    if ($position !== false) {
        echo "The word 'world' was found at position " . $position . ".";
    } else {
        echo "The word 'world' was not found in the sentence.";
    }
}
?> 
 
</body>
</html>

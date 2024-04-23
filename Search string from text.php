<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f4f4f4;
    }
    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      margin: 0 auto;
    }
    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #0056b3;
    }
    .result {
      margin-top: 20px;
    }
  </style>
</head>
<body>

<!-- HTML form to accept user input -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="sentence">Enter a sentence:</label><br>
  <input type="text" id="sentence" name="sentence" placeholder="E.g., The quick brown fox jumps over the lazy dog."><br>
  <label for="word">Enter a word to search:</label><br>
  <input type="text" id="word" name="word" placeholder="E.g., fox"><br>
  <input type="submit" value="Search">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the sentence and word input from the form
    $sentence = $_POST['sentence'];
    $word = $_POST['word'];
    
    // Output the sentence and word provided by the user
    echo "<div class='result'>You entered the sentence: <strong>" . htmlspecialchars($sentence) . "</strong></div>";
    echo "<div class='result'>You want to search for the word: <strong>" . htmlspecialchars($word) . "</strong></div>";
    
    // Use strpos to find the position of the word in the sentence
    $position = strpos($sentence, $word);
    
    // Check if the word was found in the sentence
    if ($position !== false) {
        echo "<div class='result'>The word '<strong>" . htmlspecialchars($word) . "</strong>' exists in the sentence.</div>";
    } else {
        echo "<div class='result'>The word '<strong>" . htmlspecialchars($word) . "</strong>' does not exist in the sentence.</div>";
    }
}
?> 

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: 'Comic Sans MS', cursive, sans-serif;
    margin: 20px;
    background-color: #f7f7f7;
    text-align: center;
  }
  h1 {
    color: #ff69b4;
  }
  p {
    color: #333;
    font-size: 18px;
  }
  .random-number {
    font-size: 36px;
    font-weight: bold;
    color: #007bff;
    margin-top: 20px;
  }
</style>
</head>
<body>

<h1>Welcome to the Random Number Generator!</h1>

<p>Behold, the magic of randomness:</p>

<?php
$random_number = rand();
$random_number_str = (string)$random_number;
?>

<p class="random-number">
  <?php 
  // Iterate over each character of the random number string
  for ($i = 0; $i < strlen($random_number_str); $i++) {
      echo $random_number_str[$i] . "&nbsp;"; // Display each digit separated by a space
  }
  ?>
</p>

</body>
</html>

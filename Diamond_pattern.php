<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond Pattern</title>
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

        .diamond-container {
            text-align: center;
            margin-top: 20px;
        }

        .diamond-row {
            display: block;
            margin-bottom: 10px;
        }

        .diamond-asterisk {
            color: #ff9900;
        }
    </style>
</head>
<body>
<h2>Diamond Pattern</h2>

<div class="diamond-container">
    <?php
    $height = 5; 

    // Print the top half of the diamond
    for ($i = 1; $i <= $height; $i++) {
        echo '<div class="diamond-row">';
        
        echo str_repeat(" ", $height - $i);
       
        for ($k = 1; $k <= $i * 2 - 1; $k++) {
            echo '<span class="diamond-asterisk">*</span>';
        }
        echo '</div>'; 
    }

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <!-- CSS styles for better presentation -->
    <style>
        body {
            font-family: Arial, sans-serif; /* Use a common font for better readability */
            background-color: #f9f9f9; /* Light gray background */
            margin: 0;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px; /* Limiting maximum width for better readability on larger screens */
            margin: auto; /* Center the table */
            background-color: #fff; /* White background for the table */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for depth */
        }

        th, td {
            padding: 10px; /* Add padding to cells for better spacing */
            text-align: center; /* Center-align content within cells */
            border: 1px solid #ddd; /* Add borders to cells for clarity */
        }

        th {
            background-color: #f2f2f2; /* Light gray background for table headers */
            font-weight: bold; /* Bold font for table headers */
        }

        tr:nth-child(even) {
            background-color: #f9f9f9; /* Alternate row colors for better readability */
        }

        tr:hover {
            background-color: #f2f2f2; /* Highlight rows on hover for better user interaction */
        }
    </style>
</head>
<body>
  <!-- Table structure to display multiplication table -->
  <table>
    <?php 
    // PHP script to generate rows and columns for the multiplication table
    for($i=1 ; $i<=12 ; $i++)
    {?>
       <tr>
            <?php 
            // Loop to generate table cells with multiplication results
            for($j=1 ; $j<=12; $j++)
            {?>
                <td> 
                    <?php 
                    // Display the result of multiplication
                    echo $i*$j ; ?>
                </td>
            <?php 
            } ?>
        </tr>
    <?php
    }?>
  </table>
</body>
</html>

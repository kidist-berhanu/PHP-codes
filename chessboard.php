<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS style defining the dimensions of the table and colors for the chessboard -->
    <style>
        body {
            background-color: #f0f0f0; /* Light gray background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        table {
            width: 400px; 
            height: 400px;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for the table */
        }

        td {
            width: 50px;
            height: 50px;
            border: 1px solid #888; /* Border for each cell */
        }

        .blue-black {
            background-color: #000080; /* Blue-black color */
        }

        .cream {
            background-color: #FFFDD0; /* Cream color */
        }
    </style>
    <!-- Meta tags for defining character set and viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the HTML document -->
    <title>Chessboard</title>
</head>
<body>
<!-- Table structure to display the chessboard -->
<table>
    
    <?php 
    // PHP script to generate rows and columns for the chessboard
    for($i=1 ; $i<=8 ; $i++)
    {
        echo "<tr>";
        for($j=1 ; $j<=8; $j++)
        { 
            // Condition to determine if the cell should be blue-black or cream based on the sum of row and column indices
            if( ($i+$j)%2==0 )
            {
                // Cream cell
                echo "<td class='cream'></td>";
            }
            else
            {
                // Blue-black cell
                echo "<td class='blue-black'></td>";
            }
        }
        echo "</tr>";
    }?>
    
</table>

</body>
</html>

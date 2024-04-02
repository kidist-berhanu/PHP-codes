<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS style defining the dimensions of the table and colors for the chessboard -->
    <style>
        table {
            width: 500px; 
            height: 500px;
        }
        .blue-black {
            background-color: #000080; /* Blue-black color */
        }
        .cream {
            background-color: #FFFDD0; /* Cream color */
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Table structure to display the chessboard -->
<table border="1" style="">
    
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
                echo "<td height=30px width=30px class='cream'> </td>";
            }
            else
            {
                // Blue-black cell
                echo "<td height=30px width=30px class='blue-black'> </td>";
            }
        }
        echo "</tr>";
    }?>
    
</table>

</body>
</html>

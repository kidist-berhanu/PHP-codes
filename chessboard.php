<!DOCTYPE html>
<html lang="en">
<head>
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
<table border="1" style="">
    
    <?php 
    for($i=1 ; $i<=8 ; $i++)
    {
        echo "<tr>";
        for($j=1 ; $j<=8; $j++)
        { 
            if( ($i+$j)%2==0 )
            {
                echo "<td height=30px width=30px class='cream'> </td>";
            }
            else
            {
                echo "<td height=30px width=30px class='blue-black'> </td>";
            }
        }
        echo "</tr>";
    }?>
    
</table>

</body>
</html>

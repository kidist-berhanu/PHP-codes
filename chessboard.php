<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table{
            width:500px; 
            height:500px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" style="">
    // PHP script to generate rows and columns for the chessboard
    <?php 
    for($i=1 ; $i<=8 ; $i++)
    {
    echo "<tr>";
        for($j=1 ; $j<=8; $j++)
        { 
            if( ($i+$j)%2==0 )
            {
                echo "<td height=30px width=30px bgcolor=#FFFFFF> </td>";
            }
            else
            {
                echo "<td height=30px width=30px bgcolor=#000000> </td>";
            }
        }
    echo "</tr>";
    }?>

    </table>

</body>
</html>

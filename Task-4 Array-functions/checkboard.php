<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <?php
        function chessboard($n){
        for ($i=0;$i<$n;$i++){
            echo '<tr class="tr">';
            for($j=0;$j<$n;$j++)
            {
                $num=$i+$j;
                if($num%2==0){
                    echo '<td class="black"></td>';
                  
                }
                else{
                    echo '<td class="white">';
                    echo "</td>";
                }
            }
            echo"</tr>";
        }
    }
    chessboard(4);
        ?>
    </table>
</body>
</html>
<style>
    .table{
        border:1px solid blue;
        padding:10px;
        margin-left:100px;
        background-color:lightgray;
    }
    .black,.white{
        padding:8px;
        border:1px dotted red;
        height:8px;
        width:8px;
    }
    .black{
        background-color:black;
    }
    .white{
        background-color:white;
    }

</style>
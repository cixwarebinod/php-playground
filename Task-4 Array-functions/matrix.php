<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    function getSquareMatrix($n)
    {
        $num=1;
        for ($i = 0;$i <$n;$i++)
        {
            for ($j = 0;$j <$n;$j++)
            {
                $arr[$i][$j]=$num++;
            }
        }
        return $arr;
    }
     $matrix=getSquareMatrix(5);
    ?>
    <table class="table">
        <?php
        for ($i=0;$i<count($matrix);$i++){
            echo '<tr class="tr">';
            for($j=0;$j<count($matrix[$i]);$j++){
                echo '<td class="td">';
                echo $matrix[$i][$j];
                echo "</td>";
            }
            echo"</tr>";
        }
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
    .td{
        padding:8px;
        background-color:pink;
        border:1px dotted red;
    }

</style>
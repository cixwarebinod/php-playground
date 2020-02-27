<?php
    $games=[
        [
            'name'=>'prince-of-persia',
            'price' => '450',
        ],
        [
            'name'=>'PUBG',
            'price' => '3000',
        ],
        [
            'name'=>'PUBG lite',
            'price' => '355',
        ],
        [
            'name'=>'sanandreas',
            'price' => '200',
        ],
    ]
?>
<html>
    <head>
        <title> array </title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>
            <?php
            
            foreach($games as $game)
            {
                echo '<tr>';
                echo '<td>'.$game['name'].'</td>';
                echo '<td>'.$game['price'].'</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>
<?php
    $books=[
        [
            'name'=>'summerlove',
            'price'=>'350',
            'author'=>'subin bhattarai',
        ],
        [
            'name'=>'muna madan',
            'price'=>
        ]

    ]
?>
<html>
<head> 
    <title>Display</title>
</head>
<body>
    <table border="1" style="font-size:30px;">
        <tr>
            <td>Name</td>
            <td>price</td>
        </tr>
        
            <?php 
            foreach($books as $book)
            {
                foreach($price as $pp)
                echo "<tr><td>$book</td><td>$pp</td></tr>";
            } 
            ?>
        
    </table>
</body>
</html>
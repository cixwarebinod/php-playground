<?php
//interchange the keys and value of the array
$arr=['a'=>'I','b'=>'want','c'=>'to','d'=>'dance'];
echo "The original one:";
print_r($arr);
echo "<br>";
echo "The flipped one:";
print_r(array_flip($arr));
?>
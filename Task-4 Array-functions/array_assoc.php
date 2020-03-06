<?php
//compare both key and value of array and return the difference
$a1=['a'=>'mango','b'=>'apple','c'=>'grapes','e'=>'chicken'];
$a2=['a'=>'mango','b'=>'apple','h'=>'grapes','d'=>'eggs'];
print_r(array_diff_assoc($a1,$a2));//output chicken
?>
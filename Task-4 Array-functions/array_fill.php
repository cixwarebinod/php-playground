<?php
//Fills the values
$a1=array_fill(2,5,"Name");
$a2=array_fill(0,5,"cixware");
print_r($a1);
echo "<br>";
print_r($a2);
echo "<br>";
print_r(array_combine($a1,$a2));//combining two arrays
?>
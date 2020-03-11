<?php
//randomly shuffles the array
$stds=["Diken","Bibek","Binod","Anita","Arun"];
$random=array_rand($stds,2);
echo $stds[$random[0]]."<br>";
echo $stds[$random[1]]."<br>";
echo $stds[$random[2]];
?>

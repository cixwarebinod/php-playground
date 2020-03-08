<?php
//returns the value if both the key and values matches
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");
$result=array_intersect_assoc($a1,$a2);//output:red,green,yellow
print_r($result);
?>
<?php
//compare the key and return the common key
<?php
$arr1=array("a"=>"red","b"=>"green","c"=>"blue");
$arr2=array("a"=>"red","b"=>"blue","c"=>"pink","d"=>"voilet");

$result=array_intersect_key($arr1,$arr2);//output: red,green,blue .. Although value green and blue are different it display the value green because the key are same
print_r($result);
?>
<?php
//This function display the value which are different from arr1 to arr2
    $arr1=["a"=>"Binod","b"=>"Diken","c"=>"Niraj"];
    $arr2=["d"=>"Binod","e"=>"Diken","f"=>"bibek","g"=>"paras"];
    $result=array_diff($arr1,$arr2); //display Niraj but not paras 
    print_r($result);
    ?>
    <?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result); //print yellow
?>
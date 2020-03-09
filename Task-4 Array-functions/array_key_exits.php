<?php
//checks whether the key exits or not 
echo "seat plan of cixware students";
$array=["diken"=>"01","arun"=>"02","sibu"=>"03"];
if (array_key_exists("diken",$array)){
    echo "diken exits in number 01";
}
else{
    echo "Diken doesnot exits";
}
?>
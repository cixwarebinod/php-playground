<?php
//lower to upper case .. for upper to lower we use-> CASE_LOWER
$age=array("Binod"=>"22","Bibek"=>"18","Diken"=>"21");
print_r(array_change_key_case($age,CASE_UPPER));
?>
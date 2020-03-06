<?php
//removes the unnecessary values..prints only the requested ones
function test_odd(int $var)
  {
  return($var & 1);
  }
$a1=array(1,3,2,3,4,5,9,11,6,4,8);
print_r(array_filter($a1,"test_odd"));
?>
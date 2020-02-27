<?php
$n=12345;
while ($n!= 0)
  {
    $r = $r * 10;
    $r = $r + $n%10;
    $n = $n/10;
  }
  echo ("Reverse of the number = \n, $r");
?>
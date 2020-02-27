<?php
 $num1=0;
 $num2=1;
 $fibo=0;
 for($i=0;$i<10;$i++)
 {
    echo  "$fibo \n";
     $fibo=$num1+$num2;
     $num1=$num2;
     $num2=$fibo;
 }
 ?>
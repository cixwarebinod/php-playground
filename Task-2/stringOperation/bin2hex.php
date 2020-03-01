<?php
//This function is used to convert the string into hex code
    $str= "This is a string";
    echo $str;
    echo "<br/>";
    echo bin2hex($str);
//TO make the orginal use pack syntax
    echo "<br/>";
    echo pack("H*",bin2hex($str)) . "<br>";
?>
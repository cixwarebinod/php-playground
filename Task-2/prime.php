<?php
    $number = 24;
    if($number>3){
        $temp = ($number%2==0 || $number%3==0)?"$number is not prime number":"$number is prime number";
        echo $temp;
    }
    elseif ($number==1||$number==2||$number==3){
        echo "$number is prime number";
    }
    else{
        echo "Not a valid number";
    }
    
?>
<?php
    $number = 17;
    if($number>3){
        $temp = ($number%2==0 || $number%3==0)?"$number is not prime number":"$number is prime number";
        echo $temp;
    }
    elseif ($number==1||$number==2||$number==3){
        echo "$number is prime number";
    }
    else{
        echo "Not a valid number";
    }
    
?>
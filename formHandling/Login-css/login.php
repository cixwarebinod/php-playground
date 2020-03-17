<?php
$name1=$_GET['username'];
$pass1=$_GET['pass'];
$vpass=strlen($pass1);

    if( $name1 !=null && $pass1!=null){
        echo "Here the information that you have submitted:"."<br>";
        echo $name1."<br>";
        echo $pass1."<br>";
    }
    elseif($vpass<5){
        echo '<span class="failed">Password must be greater than 6 words </span>';
    }
    else{
        echo '<span class="failed">login unsuccessful</span>';
    }

?>
<style>
    .failed{
        margin:100px auto;
        border:1px solid black;
        border-radius:5px;
        padding:20px;
        
    }
</style>
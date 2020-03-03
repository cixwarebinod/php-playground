<?php
    $str="exercitation";
    echo 'The given word is :'. $str."<br>";
    echo "the extraction of cit".substr($str,4,3)."<br>";
    echo 'The position of the \'i\' is :'.strpos($str,"i")."<br>";
    echo 'After removing exer : '.substr_replace($str,'',0,4)."<br>";
    echo 'Removing \'tation\' with \'se\' is :'.substr_replace($str,'se',6)."<br>";
?>
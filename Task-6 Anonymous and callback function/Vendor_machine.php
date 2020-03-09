<?php
$vmach=[
    1=>function(){
    echo "got Beer";
    },
    2=>function(){
        echo "got whiskey";
    },
    3=>function(){
        echo "got vodka";
    },
    4=>function(){
        echo "got softdrinks";
    },
];
$choice=1;
echo $vmach[$choice]();
?>
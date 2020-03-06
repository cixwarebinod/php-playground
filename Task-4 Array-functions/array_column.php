<?php
//array_column function displays the column of the given index
$a1=[
    ["fname"=>"Binod",
    "lname"=>"Baral",
    "age"=>23,
    "address"=>"Damak",
    ],
    [
    "fname"=>"Diken",
    "lname"=>"Khadka",
    "age"=>22,
    "address"=>"Urlabari",
    ],
    [
    "fname"=>"Bibek",
    "lname"=>"Bhandari",
    "age"=>16,
    "address"=>"kerkha",
    ]
    ];
$lname = array_column($a1, "lname");
print_r ($lname); 
?>

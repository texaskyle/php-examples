<?php
$name = "john";
function sayhi($name){
    echo "hello ".$name;
}
sayhi($name);

$x = 100;
function toFindThreeQuater($x){
    $result=$x * 0.75;
    echo "the results of 3/4 of the number is".$result;
}
toFindThreeQuater($x);
?>
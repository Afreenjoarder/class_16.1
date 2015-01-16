<?php

$Number1=$_POST['Number1'];
$Number2=$_POST['Number2'];
$op=$_POST['op'];

if ( $op == "add" ) {
    echo "$Number1 + $Number2 = ";
    echo $Number1 + $Number2;
}

if ( $op == "subtract" ) {
    echo "$Number1 - $Number2 = ";
    echo $Number1 - $Number2;
}



if ( $op == "devide" ) {
    echo "$Number1 / $Number2 = ";
    echo $Number1 / $Number2;
}
if ( $op == "multiply" ) {
    echo "$Number1 * $Number2 = ";
    echo $Number1 * $Number2;
}
?>
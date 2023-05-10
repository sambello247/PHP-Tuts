<?php 
#CONDITIONALS
/*
    ==
    ===
    <
    >
    <=
    >=
    !=
    !==
*/
#IF Statement
    // $num = 4;

    // if($num == 5){
    //     echo '5 Passed';
    // } elseif($num == 6){
    //     echo '6 Passed';
    // } else{
    //     echo 'did not pass';
    // }
#Nesting If Statement

    // $num = 6;
    // if($num > 5){
    //     if($num < 10){
    //         echo"$num passed <br>";
    //     }
    // }

#Logical Operators
/*
    and && - If both operands is true
    or || - is true if at least one of the operands is true
    xor - is true if exactly one of the operands is true
*/
   
/*
    $num = 6;
    if($num < 4 || $num < 10){
        echo "$num Passed";
    }

*/

#SWITCH

$favColor = "blue";

switch($favColor){
    case 'red':
        echo 'Your favourite color is red';
        break;
    case 'blue':
        echo 'Your favourite color is blue';
        break;
    case 'green':
        echo 'Your favourite color is green';
        break;
    default:
        echo 'Your favourite color is something else';
        break;




}

?>
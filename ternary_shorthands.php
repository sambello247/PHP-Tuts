<?php 
$loggedIn = false;

// if($loggedIn){
//     echo 'You are logged in';
// }
// else{
//     echo 'You are NOT logged in';
// }

// echo ($loggedIn ? 'You are logged in' : 'You are NOT logged in') . '<br>';

// $isRegistered = ($loggedIn == true) ? true : false;

// echo $isRegistered .'<br>';

//Nested Ternary

/*$age = 20;
$score = 12;

echo 'Your score is : ' .($score > 10 ? ($age > 10 ? 'Average':'Exceptional'):($age > 10 ? 'Horrible':'Average'));
*/

?>

<div>
    <?php if ($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Welcome Guest</h1>
    <?php } ?>
</div>

<div>
    <?php if($loggedIn) : ?>
        <h1>Welcome User</h1>
    <?php else :?>
        <h1>Welcome Guest</h1>
    <?php endif ?>


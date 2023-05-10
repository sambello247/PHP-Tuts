<?php 
# LOOPS - Execute cose set number of times
/* 
    For
    While
    Do..While
    Foreach
*/

# For Loop
# @Params - Init, condition, inc
for($i = 0; $i < 10; $i++){
    echo 'Number '. $i . '<br>';
}

#While Loop
# @Params - Condition

$i = 11;
while($i < 20){
    echo 'Number '. $i . '<br>';
    $i++;
}

#While Loop
# @Params - Condition

$i = 21;
do{
    echo 'Number '. $i . '<br>';
    $i++;
}
while($i < 30);



#Foreach Loop - For arrays

//Indexed Array
$people = array('Sam', 'Teejay', 'Elite');

foreach ($people as $person) {
    # code...
    echo $person . '<br>';
}

//Associative Array
$people = array('Sam' => 'sam@gmail.com', 'Teejay' => 'teejay@gmail.com', 'Elite' => 'elite@gmail.com');

foreach ($people as $person => $email) {
    # code...
    echo $person . ' ' . $email . '<br>';
}





?>
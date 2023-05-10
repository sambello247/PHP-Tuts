<?php
#Array -  Variable that holds multiple values
/*
    -Indexed
    -Associative
    -Multi-dimensional
*/

//Indexed Arrays
$people = array('Kevin', 'Jeremy', 'Sara');
echo $people[1] . '<br>';

$ids = array(23, 55, 12);
echo $ids[2] . '<br>';

$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = 'Chevy';
$cars[] = 'BMW';

//Get array by the position
echo $cars[4] . '<br>';

echo count($cars) .'<br>';

//The print_r() function prints the information about a variable in a more human-readable way.
print_r($cars);

//The var_dump() function dumps information about one or more variables. The information holds type and value of the variable(s).
var_dump($cars);



//Associative Arrays (Key and Value pairs)
$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);

//Get array by the key
echo '<br>'. $people['Brad'];

$ids = [22 => 'Brad', 44 => 'Jose', 63 =>'William'];
echo '<br>'. $ids[22];

$people['Jill'] = 42;
echo '<br>'. $people['Jill'] .'<br>';

print_r($people);
var_dump($people);

//Multi-dimensional Array (Arrays with inner arrays)
$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Honda', 23, 12)
);

echo $cars[1][0];


?>
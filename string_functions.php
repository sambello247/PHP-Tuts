<?php 
 # Substr()
 # Returns a portion of a string

//  $output = substr('Hello', 1 , 3);
//  $output = substr('Hello', -2);
//  echo $output;

# Strlen()
# Returns the length of a string

// $output = strlen('Hello World');
// echo $output;

#Strpos()

#Finds the position of the first occurence of a substring

// $output = strpos('Hello World', 'o');
// echo $output;


#Strrpos()

#Finds the position of the last occurence of a substring

// $output = strrpos('Hello World', 'o');
// echo $output;

# Trim()
# Strip Whitespace

/*
$text = 'Hello World                ';
// var_dump($text);

$trimmed = trim($text);
var_dump($trimmed);

*/

#Strtoupper
# Makes everything uppercase

// $output = strtoupper('Hello World');
// echo $output;

#Strtolower
# Makes everything lowercase

// $output = strtolower('Hello World');
// echo $output;

# Ucwords()
# Capitalize every words

// $output = ucwords('hello world');
// echo $output;

#str_replacce()
# Replace all occurence of a search string with a replacement

// $text = 'Hello World';
// $output = str_replace('World','Everyone', $text);
// echo $output;

#is_string()
# Check if String

// $val = 'Hello';
// $output = is_string($val);

// echo $output;

// $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '',' ', 0, '0');

// foreach($values as $value){
//     if(is_string($value)){
//         echo "{$value} is a string<br>";
//     }
// }

# gzcompress()
# Compress a string

$string = " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime magnam, magni at itaque quo, sed fuga sapiente eos odio optio aperiam non labore ducimus voluptatem rem libero consectetur nam repellendus!";

$compressed = gzcompress($string);
echo $compressed;

$original = gzuncompress($compressed);
echo $original;








?>
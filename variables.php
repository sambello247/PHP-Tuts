<?php 
    // Single line comment
    # Single lime comment
    /* 
        Multiline
        Comment
    */


    //echo
    echo 'Hello World <br>';

    #VARIABLES
    /*
        - Prefix $
        - Start with a letter or an underscore
        - Can't start with numbers
        -Only letters, numbers and underscore
        -Case sensitive
    */
    # DATAT TYPES
    /* 
        Strings
        Integers
        floats (decimals)
        Booleans
        Arrays
        Objects
        Null
        Resource
    */
    
    // echo variable
    $_output = 'Hello World <br>';
    echo $_output;

    //Addition
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;
    echo $sum. '<br>';

    //Concatenation
    $string1  = 'Hello';
    $string2 = 'World';
    $greeting = $string1 .' '.$string2.'! <br>';
    echo $greeting;

    //Double quote parse the variable
    $greeting2 = "$string1 $string1 <br>";
    echo $greeting2;

    //Escape Sequence
    $string3 = 'They\'re here <br>';
    echo $string3;

    //Constant for variable that aint gonna change.
    define('GREETINGS','Hello Everyone');

    echo GREETINGS;

    
    $float1 = 4.4;
    $bool1 = true;

    
    

?>
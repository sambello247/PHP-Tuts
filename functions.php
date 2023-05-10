<?php 
    # FUNCTION - Block of code that can be repeatedly caled

    /* 
        Camel Case - myFunction()
        Lower Case - my_cunction()
        Pascal Case - myFunction()

    */

    // Create Simple Function
    function simpleFunction(){
        echo 'Hello World <br>';

    }

    //Run Simple Function
    simpleFunction();

    // Function with param
    function sayHello($name = 'World'){
        echo  "Hello $name <br>";
    }

    sayHello('Sam');
    sayHello('Teejay');
    sayHello();

    //Return Value
    function addNumbers($num1, $num2){
        return $num1 + $num2 .'<br>';
    }

    echo addNumbers(2,2);

    // By Reference

    /*
        In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

        When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:
     */

    
    $myNum = 10;

    function addFive($num){
        $num = $num + 5;
       echo '<br>';
    }

    function addTen(&$num){
        $num = $num + 10;
        echo '<br>';
    }

    addFive($myNum);
    echo "Passed by Value: $myNum<br>";

    addTen($myNum);
    echo "Passed by Reference: $myNum<br>";

?>
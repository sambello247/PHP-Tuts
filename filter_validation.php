<?php
    //Check for posted data
    // if(filter_has_var(INPUT_POST, 'data')){
    //     echo 'Data Found';
    // }else{
    //     echo 'No Data';
    // }
    
    if(filter_has_var(INPUT_POST, 'data')){

        $email = $_POST['data'];

        //Remove Illegal Chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        echo $email . '<br>';

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is Valid';
        }else{
            echo 'Email is not Valid';
        }
    }

        #FILTER_VALIDATION_BOOLEAN
        #FILTER_VALIDATE_EMAIL
        #FILTER_VALIDATE_FLOAT
        #FILTER_VALIDATE_INT
        #FILTER_VALIDATE_IP
        #FILTER_VALIDATE_REGEXP
        #FILTER_VALIDATE_URL

        #FILTER_SANITIZE_EMAIL
        #FILTER_SANITIZE_ENCODED
        #FILTER_SANIT

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>
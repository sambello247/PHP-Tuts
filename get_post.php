<?php 


    //$_GET
    //Data sent through Url not not header
    if(isset($_GET['name'])){
        print_r($_GET);
        $name = htmlentities($_GET['name']);
        // echo $name;
    }

 /*
    //$_POST
    //Data sent through header not url
    if(isset($_POST['name'])){
        print_r($_POST);
        $name = htmlentities($_POST['name']);
        echo $name;
    }

    //Another way to get data from post and get is the $_REQUEST super globals
    if(isset($_REQUEST['name'])){
        print_r($_REQUEST);
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    }
    
*/
    //Another way to get data from get is the $_SERVER QUERY_STRING super globals
    echo $_SERVER['QUERY_STRING'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="text" name="email">
        </div>

        <input type="submit" value="Submit">
    </form>

    <ul>
        <li>
            <a href="get_post.php?name=Sam">Sam</a>
        </li>
        <li>
            <a href="get_post.php?name=Teejay">Teejay</a>
        </li>
    </ul>

    <h1><?php echo "{$name}'s Profile "?></h1>
    
</body>
</html>
<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Registration List</h1>
        <hr/>

        <?php

        //Activating the exception
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        

        //Assigning the collected data
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //login info
        define('HOSTNAME', 'localhost');
        define('USERNAME' , 'root');
        define('PASSWORD', '');


        //load the content of the user defined functions used to interact with MySQL
        require_once "db_management.php";

        
        ?>
        <div id="back">
            <a href="index-SignUp.php"><input type="submit" value="Try again!"></a>
        </div>
</body>
</html>
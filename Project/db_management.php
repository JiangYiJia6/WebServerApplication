<?php

///1: CREATE THE DATABASE AND DATATABLE STRUCTURE


//Connecting to the database 
try{
    $connection = new mysqli(HOSTNAME,USERNAME,PASSWORD);
}catch(mysqli_sql_exception $error){
    die("Connection to MySQL failed! <br>" . $error);
}


//Create the database structure if it doesnt exist
try{
    $createStructure = $connection->multi_query(file_get_contents("db_structure.sql")); //reads the entire contents of the file
    //files_get_contents reads the entire contents of the file
    //$connection->multi_query(...) sends the sql queries to the MySQL to be executed
} catch(mysqli_sql_exception $error){
    die("Creation of Database and Tables failed! <br>" . $error);
}

//disconect from the database management system DBMS

try{
    $connection->close();
}catch(mysqli_sql_exception $error){
    die("Disconection from MySQL failed! <br/>" . $error);
}


////FEATURE 2: INSERT 1 RECORD 

//1-Connect to the database management system (DBMS) MYSQL
try{
    $connection = new mysqli(HOSTNAME,USERNAME,PASSWORD);
}catch(mysqli_sql_exception $error)
{
    die("Connection to MySQL failed! <br>" . $error);
}

//2-Select the database which will be create from db_structure.sql
try{
    $selectDBUsers = mysqli_select_db($connection , "users");
}catch(mysqli_sql_exception $error)
{
    die("Connection to the database failed <br/>" . $error);
}

//3-Check if the table exists
try{
    $sqlCode = "DESC visitors";
    $describeTable = $connection->query($sqlCode);
}catch(mysqli_sql_exception $error){
    die("Description of the Table failed!<br/>" . $error->getMessage());
}


//4-Inserting the record in the table
try{
    $sqlCode = "INSERT INTO visitors (firstname , lastname , email , password)
                VALUES ('$firstname' , '$lastname' , '$email' , '$password')";
    $insertRecords = $connection->query($sqlCode); //executing the query previously made
}catch(mysqli_sql_exception $error){
    die("Data insertion into the Table failed!<br>" . $error);
}


//5-Selecting all the exisiting records into the table and display them

try{
    $sqlCode = "SELECT * FROM visitors";
    $selectRecords = $connection->query($sqlCode);
    //Calculate the number of records one by one in a HTML table
    $number_of_rows = $selectRecords->num_rows;

    //use a loop to display a table
    echo"<table>";
    echo"<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
    for($j = 0; $j < $number_of_rows; $j++)
    {
        echo"<tr>";
        //Assign the records of each row to an associative array
        $each_row = $selectRecords->fetch_array(MYSQLI_ASSOC);
        //Display each of the records corresponding to each column
        echo "<td>" . $each_row['id'] . "</td>";
        echo "<td>" . $each_row['firstname'] . "</td>";
        echo "<td>" . $each_row['lastname'] . "</td>";
        echo "<td>" . $each_row['email'] . "</td>";
        echo"<tr>";

    }
    echo"</table>";
}catch(mysqli_sql_exception $error){
    die("Data selection from the Table failed!<br/>" . $error);
}

//6-Disconnect from the database Management System (DBMS)
try{
    $disconnect = $connection->close();
}catch(mysqli_sql_exception $error){
    die("Disconnection from MySQl failed!<br/>" . $error);  
}

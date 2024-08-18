<?php

//Here is where we're going to set up all of the instructions that is gonna connect with the database and sections and cookies and many securities and .env file and so on.

// Setting up and initializing the sessions of the site
session_start();

// Setting the .env files
//require '../env.php';

$pwd = "@DevilSlayer26#"; /* If your database configuration is set to use a password, then replace this password by yours  and don't comment this code statement */
//$pwd = ""; /* If your database configuration is set to do not use a password just comment the code above and uncomment this line or code statement */

$db_connection = null;

try {
    $db_connection = new PDO(
        "mysql:host=". "localhost" .':' . 3306 . "; dbname=" . "aviator" .'; charset='. "utf8",
        "root",
        "$pwd",
    );
    
    return $db_connection;
} catch(Exception $e) {
    $db_connection = 'Error';

    echo "<script type='text/javascript'>" . 
        "alert('Ops! Something went wrong on your database connection. Please check your configuration and database file on the Server and try again. Probably the error is the following ' + $e)" . 
        "</script>";
}


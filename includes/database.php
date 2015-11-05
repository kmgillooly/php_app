<?php

    //Connect to the database
    $host = "127.0.0.1";   //See Step 3 about how to get host name
    $user = "kmgillooly";                     //Your Cloud 9 username
    $pass = "";                                 //Remember, there is NO password!
    $db = "shop";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. It is always 3306




 
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());



    //And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    while ($row = $result) {
        echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];
    }

/*to connect to the database: */
   
try {
    $db = new PDO("mysql:host=" . $host . ";dbname=" . $db .";port=" . $port, $user);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");    
} catch (Exception $e) {
        echo "couldnt connect to the database";
        exit;
}


?>
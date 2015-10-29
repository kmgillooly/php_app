<?php

    //Connect to the database
    $host = "kmgillooly-php_app_cloned_startover-1988884";   //See Step 3 about how to get host name
    $user = "kmgillooly";                     //Your Cloud 9 username
    $pass = "";                                 //Remember, there is NO password!
    $db = "shop";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. It is always 3306

    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());



    //And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];
    }

    
try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME .";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");    
} catch (Exception $e) {
        echo "couldnt connect to the database";
        exit;
}


?>
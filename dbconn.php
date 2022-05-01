<?php
function pdo_connect_mysql() {
    // MySQL info
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'nick_admin';
    $DATABASE_PASS = 'Phineasferb1!';
    $DATABASE_NAME = 'shoppingcart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display error.
    	exit('Failed to connect to database!');
      echo "Connection failed: " . $exception->getMessage();
    }
}


?>
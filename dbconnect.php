<?php

//set connection variables
$host='localhost';
$port='8889';
$username='root';
$password='root';
$database_name= 'ega';

//connection to server & database
$connection = mysqli_connect($host, $username, $password, $database_name);
 
//check connection 
if (mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
endif;

?>

<?php



require_once('dbconnect.php');

$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$email = $_GET['email'];
$pwd = $_GET['pwd'];


echo "<br>";


$my_query = "";


$my_query = "select * from Users where email = '$email' "; 

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0)
{
    echo "Sorry! This email already exists. Please choose a different email.";
    
}

else
    
{
    
    $my_query = "INSERT INTO ega.Users (first_name, last_name, email, pwd) VALUES ('$first_name', '$last_name', '$email', '$pwd')";
    
    echo "<br>";
    
    $result = mysqli_query($connection, $my_query);
    
    if($result)
    {
        echo  "Item Successfully Added!";
        
    }
    
    else
    {
        echo "<b>ERROR: unable to post </b>";
        
    }
    
    
}

mysqli_close();

?>
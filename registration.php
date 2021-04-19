<?php
//session_start();

$host='localhost';
$dbUsername= 'root';
$dbPassword= '';
$dbName= 'food';


$name = $_POST['name'];
$pass = $_POST['password'];
$mail = $_POST['email'];



if(isset($_POST['register']))
{
    //connect to database
    $connection= new mysqli($host, $dbUsername, $dbPassword, $dbName);

    //check connection
    if($connection->connect_error)
    {
        die("Connection Failed: ". $connection->connect_error);
    }

    echo "Successful connection";

     //write query
     $query= "INSERT INTO users(name1, email, password1) VALUES('$name', '$mail', '$pass')";

     //checks if the query was successful
     $check= mysqli_query($connection, $query);

     if($check==1)
     {
         echo "Rgistration Successful";
     }
     else
     {
         echo "Error" . $query . "<br>" . mysqli_error($connection);
     }
 
 
     $connection->close();
     
}



?>



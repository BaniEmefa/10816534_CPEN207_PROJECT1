<?php

$mail = $_POST['email'];
$pass = $_POST['password'];



$host='localhost';
$dbUsername= 'root';
$dbPassword= '';
$dbName= 'food';



if(isset($_POST['login']))
{
    //connect to database
    $connection= new mysqli($host, $dbUsername, $dbPassword, $dbName);

    //check connection
    if($connection->connect_error)
    {
        die("Connection Failed: ". $connection->connect_error);
    }

    //echo "Successful connection";

     //write query
     $query= "SELECT * FROM users WHERE email='$mail' AND password1= '$pass' ";

     
    //checks if the query was successful
    $result= mysqli_query($connection, $query);

    $rnum= mysqli_num_rows($result);

    if($rnum==1)
    {
       echo "Login Successful";
       header("Location: Restaurant\index.html");
    }
    else
    {
        echo "Error" . $query . "<br>" . mysqli_error($connection);
    }

   $connection->close();
     
}

?>
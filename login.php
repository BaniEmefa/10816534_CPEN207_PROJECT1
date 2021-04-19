<?php 

session_start();
	
$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con,'acessform');

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];

$s = "select * from acessform where email = '$email";
$result = mysqli_query($con,$s );

$num= mysqli_num_rows($result);

if($num ==1){
    echo"email already taken";
}else{
    $reg ="insert into acessform(email,password) values('$email','$password')";
    mysqli_query($con,$reg)
    echo"Registration Sucessful";
}



?>
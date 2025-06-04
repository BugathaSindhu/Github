<?php
$servername="localhost";
$username="root";
$password="";
$dbname="user_registration";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$user=$_POST['username'];
$email=$_POST['email'];
$pass=password_hash($_POST['password'],PASSWORD_BCRYPT);
$sql="INSERT INTO users(username,email,password) VALUES('$user','$email','$pass')";
if($conn->query($sql)=== TRUE)
{
    echo "Registration Successfull";
}
else
{
    echo "Error:".$sql ."<br>".$conn->error;                          
}
?>

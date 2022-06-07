<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
$post_name = $_POST['name'];
$post_email = $_POST['email'];
$post_message = $_POST['message'];

$dbhost='127.0.0.1:3307';
$username = 'root';
$password = '';
$database='persondetails';

$link=mysqli_connect("$dbhost","$username","$password","$database");

echo"connected";


$sql = "INSERT INTO student_info(name, email, message) VALUES('$post_name', '$post_email', '$post_message')";

$result = $link->query($sql); 

if($result)
{
echo 'Will connect you';
}
else
{
 echo 'Unable to connect';
}
$link->close();
}
?>
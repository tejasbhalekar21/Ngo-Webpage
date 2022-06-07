<?php


$dbhost='localhost';
$username = 'root';
$password = '';
$database='persondetails';

$link=mysqli_connect("$dbhost","$username","$password","$database");

echo"connected";


?>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "prince";
$username = $_POST ['username'];
$password = $_POST ['password'];
// Database connection
$con = mysqli_connect("localhost","root","","prince");
if(! $con) {
    echo "Failed t connect";
} else{
    echo "You have successfully logged in";
}
?>
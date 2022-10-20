<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	$firstname       = $_POST['firstname'];
    $lastname        = $_POST['lastname'];
    $email           = $_POST['email'];
    $username        = $_POST['usrename'];
    $password        = $_POST['password'];
    $confirmpassword = $_POST['confirm password'];
	 $sql = "INSERT INTO registration (firstname,lastname,email,username,password,confirm password)
	 VALUES (?,?,?,?,?,?)";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
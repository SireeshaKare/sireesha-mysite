<?php
include('connection.php');
session_start();
// Define $username and $password
$email=$_POST['email'];
$password=$_POST['password'];
// SQL query to fetch information of registerd users and finds user match.
$sql = "SELECT * FROM customer_details WHERE email_id = '$email' AND password = '$password'";
$result = $conn->query($sql);
$rows = mysqli_num_rows($result);
if ($rows == 1) 
{
	if (($email != 'admin@onlineshopping.com') && ($email != 'logistics@onlineshopping.com'))
	{
		$_SESSION['login_user']=$email;// Initializing Session
        header("Location: products.php"); // Redirecting To Other Page

	}
	else if($email == 'admin@onlineshopping.com')
	{
		header("Location: admin.php");
	}
	else if($email == 'logistics@onlineshopping.com')
	{
		header("Location: logistics.php");
	}
	else
	{
		echo "The email is not registered";
	}
}
	
mysqli_close($conn); // Closing Connection

?>
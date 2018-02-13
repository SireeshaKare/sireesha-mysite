<?php
require_once('connection.php');
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$password = $_POST["password"];
$sql = "INSERT INTO customer_details (first_name, last_name, email_id, contact_number, password) VALUES ('$firstName', '$lastName', '$email', '$contact', '$password')";
$result= $conn->query($sql);
if (isset($result))
{
	header("Location: login.html");
}
mysqli_close($conn);
?>
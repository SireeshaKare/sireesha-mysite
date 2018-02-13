<?php 
session_start(); 
$_SESSION['login_user'] = ''; 
unset($_SESSION['email']); 
session_destroy(); 
header('location:index.html'); 
?>
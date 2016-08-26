<?php
 session_start();
 require 'connection.php';

$conn    = Connect();

$email   = $conn->real_escape_string($_POST['u_email']);
$message   = $conn->real_escape_string($_POST['u_message']);

$query   = "INSERT into  contact_us (email,message) VALUES('" . $email . "','" . $message . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}else{
	$_SESSION["message"] = "Your response is submmited successfully.";
	header("location:contactusph.php");
}
$conn->close();

?>
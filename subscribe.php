<?php
 session_start();
 require 'connection.php';

$conn    = Connect();
$email   = $conn->real_escape_string($_POST['subscribe_email']);
$page = $conn->real_escape_string($_POST['page_name']);
$query   = "INSERT into  subscribe (email) VALUES('" . $email . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}else{
	header('location:'. $page);
}
$conn->close();

?>
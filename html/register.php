<?php 
$username="root";
$password="";
$server="localhost";
$dbname="college";
$conn=mysqli_connect($server, $username, $password, $dbname);


$name=mysqli_real_escape_string($conn,$_POST['fname']);
$contact=mysqli_real_escape_string($conn, $_POST['contact']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$message=mysqli_real_escape_string($conn, $_POST['text']);
if(empty($name)||empty($contact)||empty($email)||empty($message))
{
	header('location:index.html?alert=empty');
	exit();
}
else
{
	$query="INSERT INTO info (Name, Contact, Email, Message) values('$name', '$contact', '$email', '$message')";
	mysqli_query($conn,$query);
	header('location:index.html?alert=successfully_uploaded');
}

 ?>
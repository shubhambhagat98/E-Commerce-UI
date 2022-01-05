<?php

if (isset($_POST['submit'])) {

	require_once 'dbh.inc.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die("Unable to connect to database");

	/*$first = mysqli_real_escape_string($conn, $_POST['firstname']);
	$last = mysqli_real_escape_string($conn, $_POST['lastname']);
	$user = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);
	$tel = mysqli_real_escape_string($conn, $_POST['telephone']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);*/

	$first  = $conn->real_escape_string($_POST['firstname']);
	$last  = $conn->real_escape_string($_POST['lastname']);
	$pwd  = $conn->real_escape_string($_POST['password']);
	$tel  = $conn->real_escape_string($_POST['contact']);
	$email  = $conn->real_escape_string($_POST['email']);

	//hashed password
	$h_pwd = password_hash($pwd, PASSWORD_DEFAULT);
/*	echo $first;
	echo $last;
	echo $tel;

	echo $email;
	echo $pwd;
	
*/

	 //insert user into database
	$sql = "INSERT INTO users (user_first, user_last, user_pwd, user_contact, user_email) VALUES ('$first', '$last', '$h_pwd', '$tel', '$email');";
	$result   = $conn->query($sql);
if ($result) {
	header("Location: ../signup.php?signup=success");

} else {
	header("Location: ../signup.php?signup=notsuccess");
	
}


		
}else{
	header("Location: ../signup.php");
	exit();
}



?>
<?php

session_start();


if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die("Unable to connect to database");

	$email =$conn->real_escape_string($_POST['email']);
	$pwd =$conn->real_escape_string($_POST['password']);

	$sql    = "SELECT * FROM users WHERE user_email='$email' ";
  	$result   = $conn->query($sql);
  	$rowcount= $result->num_rows;

  	if ($rowcount < 1) {
  		header("Location: ../index.php?login=error");
	    exit();
  	} else{
          if($row = $result->fetch_array(MYSQLI_ASSOC)){

            //de-hashing the password
              $h_pwd_check = password_verify($pwd, $row['user_pwd']);
              if ($h_pwd_check == false) {
                header("Location: ../index.php?login=error");
                exit();
              }elseif ($h_pwd_check == true) {
                //log in the user here
                $_SESSION['u_first']= $row['user_first'];
                $_SESSION['u_last']= $row['user_last'];
                $_SESSION['u_email']= $row['user_email'];
                $_SESSION['u_contact']= $row['user_contact'];   

                header("Location: ../index.php?login=success");
                exit();
              }
          } 		
  	}
  	
} else {
	header("Location: ../index.php?login=error");
	exit();
}






?>
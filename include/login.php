<?php

	session_start();
	
	echo "Starting security processing...";
	
	if ($_GET["logout"]==1 AND $_SESSION['id']) {
		
		session_destroy();
	
		$loginmessage="You have been logged out. Have a nice day!";
	
	}
	
	include("connection_security.php");
	
	if ($_POST['submit']=="Sign Up") {

		if (!$_POST['email'])
			$loginerror.="<br />Please enter your email";
		else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
			$loginerror.="<br />Please enter a valid email"; 
	
	
		if (!$_POST['password']) 
			$loginerror.="<br />Please enter your password";
		else { 

			if (strlen($_POST['password'])<8) 
				$loginerror.="<br />Please enter at least 8 characters";

			if (!preg_match('/[A-Z]/', $_POST['password']))
				$loginerror.= "<br />Please include min 1 capital letter";
			
		}
		
		if ($loginerror)
			$loginerror = "There were error(s) in your sign up details:".$error;
		else {
		
			$query= "SELECT * FROM `users` WHERE email_address ='".mysqli_real_escape_string($link, $_POST['loginemail'])."'";
		
			$result = mysqli_query($link, $query);	
		
			$results = mysqli_num_rows($result);
		
			if ($results) 
				$loginerror = "That email is already registered. Do you want to log in?";
			else {
		
				$query = "INSERT INTO `users` (`email_address`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['loginemail'])."', '".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."')";

				mysqli_query($link, $query);
		
				$loginmessage = "You've been signed up!";
		
				$_SESSION['id']= mysqli_insert_id($link);
		
			}	
		
		}

	}

	if ($_POST['submit'] == "Log In") {	

		$query = "SELECT * FROM users WHERE email_address = '".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password = '" .md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";

		$result = mysqli_query($link, $query);
	
		$row = mysqli_fetch_array($result);
	
		if ($row) {
	
			$loginmessage = "You've been logged in!";
			
			$_SESSION['id']=$row['id'];
		
		} else {
	
			$loginerror = "We could not find a user with that email and password. Please try again.";
	
		}

	}
	
	if ($loginerror)
		$loginresult='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong><br />'.$loginerror.'</div>';
	else if ($loginmessage)
		$loginresult='<div class="alert alert-success">'.$loginmessage.'</div>';
	
?>
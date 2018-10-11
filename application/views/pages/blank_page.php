<?php 
	if(isset($msg) && $msg) echo $msg;
	echo '<br>';
	if(isset($username) && $username) echo $username;
	echo '<br>';
	if(isset($email) && $email) echo $email;
	echo '<br>';
	if(isset($logged_in) && $logged_in) echo $logged_in;
	echo '<br>';	

	if (isset($_SESSION['username']) && $_SESSION['username'])
		echo $_SESSION['username'];
	else 
		echo 'No session username';

	echo '<br>';
	if (isset($_SESSION['email']) && $_SESSION['email'])
		echo $_SESSION['email'];
	else 
		echo 'No session email';

	echo '<br>';
	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'])
		echo $_SESSION['logged_in'];
	else 
		echo 'No session logged_in';

?>
<?php 
	
  //$db = mysqli_connect("localhost","my_user","my_password","my_db");
	//$db = mysqli_connect('localhost', 'c257053_track', 'track', 'c257053_track');
	$db = mysqli_connect('localhost', 'aruna', 'aruna', 'track');

	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		echo "Connected to TRACK";
	}
	
	$ip=$_SERVER['REMOTE_ADDR'];
	
	$browser=$_SERVER['HTTP_USER_AGENT'];	
	
	$time=date("l jS \of F Y h:i:s A") ;
	
	$site="developing";
	
	mysqli_query($db, "INSERT INTO info (ip,time, browser,site) VALUES ('$ip', '$time', '$browser','$site')"); 

	mysqli_close($conn);
?>

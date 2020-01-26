<?php

if(isset($_POST['btn'])){
	$name=$_POST['firstname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	//Print information from the user.
	echo"<h1>Thank you for shopping with us!.</h1><br>";
    echo "<h2>You have submitted the following information.</h2><br>"; 
	echo "your name:$name";
	echo "<p>Email Address: <a href='mailto:'>$email</a></p>";
	echo "Address:$address<br>";
	echo "city:$city<br>";
	echo "state:$state<br>";
	echo "zip code:$zip";
}

?>
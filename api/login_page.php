<?php
	$servername = "localhost";
	$username = "root"; // this is mysql username by default "root"
	$password = "your mysql password";
	$dbname = "your database name";
	$connection = new mysqli($servername,$username,$password,$dbname);
	
	function execute($sql){
		global $connection;
		$query=$stmt = $connection->prepare($sql);
		$stmt->execute();
		return 1;
	}

	$username = $_GET['username'];
	$password = $_GET['password'];

	$sql = "SELECT * From user_login WHERE user.email='".$username."' AND user.password='".$password."'";
	$res = execute($sql);
	echo json_encode($res);

?>
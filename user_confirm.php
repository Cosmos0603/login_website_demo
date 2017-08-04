<?php
	$mysql_servername = "localhost";
	$mysql_username = "root";
	$mysql_password = "love12.31";
	$mysql_dbname = "myDB";

	//connection
	$conn = mysqli_connect($mysql_servername, $mysql_username, $mysql_password, $mysql_dbname);

	//detect connection
	if($conn->connect_error){
		die("connect error: ".$conn->connect_error);
	}

	//confirm user
	$sql = "SELECT password FROM user WHERE username='".$username."'";
	$result = $conn->query($sql);
	if($result->num_rows<1){
		$err = "error: user does not exist";
	}else{
		$data = $result->fetch_assoc();
		if($data['password']!=$password){
			$err = "error: password is wrong";
		}else{
			header("location:http://baidu.com");
		}
	}
?>
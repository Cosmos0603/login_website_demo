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
	
	//check repeat username
	$sql = "SELECT username FROM user WHERE username='".$username."'";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		$err_username = "error: username already exists";
	}else{
		//insert data
		$sql = "INSERT INTO user(username, password, age, p_number) VALUES('".$username."','".$password."',$age,'".$p_number."')";
		if($conn->query($sql)===TRUE){
			header("location:/demo/login.php");
			exit;
		}else{
			echo "data insert error".$conn->error;
		}
	}

	//close connection
	$conn->close();
?>
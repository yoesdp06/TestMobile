<?php 
	$id = $_GET['id'];
	
	require_once('dbConnect.php');
	
	$sql = "SELECT * FROM user WHERE username=$username";
	$r = mysqli_query($con,$sql);
	
	$result = array();
	
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"username"=>$row['username'],
			"nama"=>$row['nama'],
			"password"=>$row['password'],
				"alamat"=>$row['alamat'],
"jekel"=>$row['jekel'],

		));

	echo json_encode(array('result'=>$result));
	mysqli_close($con);
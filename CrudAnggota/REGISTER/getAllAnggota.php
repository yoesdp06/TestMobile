<?php 
	require_once('dbConnect.php');
	
	$sql = "SELECT * FROM user";
	$r = mysqli_query($con,$sql);
	
	$result = array();
	
	while($row = mysqli_fetch_array($r)){		
		array_push($result,array(
			"username"=>$row['user_name'],
			"password"=>$row['password']
		));
	}
	
	echo json_encode(array('result'=>$result));
	mysqli_close($con);
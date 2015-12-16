<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
include"dbConnect.php";

$login = mysql_query("select * from user where (user_name = '" . $_POST['username'] . "') and (password = '" . $_POST['password'] . "') ");
$rowcount1 = mysql_num_rows($login);
	$data1=mysql_fetch_array($login);
	if ($rowcount1 == 1) {
	//$_SESSION['username']=$username;
//	$_SESSION['id_admin']=$data1['id_admin'];

	//header("Location:dasbord.php");
	}
	else
	{
        echo "<script>alert('Login gagal, silahkan cek username dan password')</script>";
	//	echo "<html><head><meta http-equiv='refresh' content='0;url=index.php'></head><body></body></html>";	
		}
?>
		
<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$user_name = $_POST['user_name'];
		
		$nama = $_POST['nama'];
		$password = $_POST['password'];
		$alamat = $_POST['alamat'];
		
		// blum di tambahkan jenis kelamin
	
		$sql = "INSERT INTO user  (user_name,nama,password,alamat) VALUES ('$user_name','$nama','$password','$alamat')";
		
		require_once('dbConnect.php');
		
		if(mysqli_query($con,$sql)){
			echo 'Berhasil menginput data anggota';
		}else{
			echo 'Gagal Menginput data anggota';
		}
		
		mysqli_close($con);
	}
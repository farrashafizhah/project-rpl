<?php 
	session_start();

	include 'connection.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysqli_query($connect, "SELECT * FROM penghuni WHERE username='$username' AND password='$password'");
	$cek = mysqli_num_rows($query);

	$data = mysqli_fetch_array($query);
	$id_penghuni   = $data['id_penghuni'];

	if ($cek > 0) {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location: penghuni-home.php?id=$id_penghuni");
	}
	else {
		header("location: penghuni-login.php?message=gagal#login");
	}
?>
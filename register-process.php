<?php
	include 'connection.php';

	$nama_penghuni 	= $_POST['nama_penghuni'];
	$nik 			= $_POST['nik'];
	$username	 	= $_POST['username'];
	$password	 	= $_POST['password'];
	$tgl_lahir	 	= $_POST['tgl_lahir'];
	$tgl_lahir		= date('Y-m-d', strtotime($tgl_lahir));

	$alamat		 	= $_POST['alamat'];
	$no_hp		 	= $_POST['no_hp'];
	$pekerjaan	 	= $_POST['pekerjaan'];
	$tgl_masuk	 	= $_POST['tgl_masuk'];
	$tgl_masuk		= date('Y-m-d H-i-s', strtotime($tgl_masuk));

	$tgl_keluar 	= $_POST['tgl_keluar'];
	$tgl_keluar		= date('Y-m-d H-i-s', strtotime($tgl_keluar));

	$id_kamar		= $_POST['id_kamar'];

	$query = mysqli_query($connect, "INSERT INTO penghuni VALUES('', '$nama_penghuni', '$nik', '$username', '$password', '$tgl_lahir', '$alamat', '$no_hp', '$pekerjaan', '$tgl_masuk', '$tgl_keluar', '$id_kamar')");

	if ($query) {
		header("location: penghuni-login.php#login");
	}
	else {
		echo "Maaf register gagal";
	}
?>
<?php
	include 'connection.php';

	$id_penghuni 	= $_POST['id_penghuni'];
	$keluhan	 	= $_POST['keluhan'];
	$status	 		= $_POST['status'];
	$proses			= $_POST['proses'];


	$query = mysqli_query($connect, "INSERT INTO keluhan VALUES('', '$id_penghuni', '$keluhan', '$status', current_timestamp(),'$proses')");

	if ($query) {
		header("location:penghuni-home.php?id=$id_penghuni?message=berhasil#keluhan");
	}
	else {
		header("location:penghuni-home.php?id=$id_penghuni?message=gagal#keluhan");
	}
?>
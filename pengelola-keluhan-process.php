<?php
	include "connection.php";
	
	$id_keluhan 	= $_POST['id_keluhan'];
	$status		 	= $_POST['status'];
	$proses		 	= $_POST['proses'];
	
	$sql = "UPDATE keluhan SET proses='$proses', status='$status' WHERE id_keluhan = $id_keluhan";
	$query = mysqli_query($connect, $sql);


if ($query) {
    header("location:pengelola-home.php?id=$id_keluhan?message=berhasilEdit#keluhan");
} else {
    header("location:pengelola-home.php?id=$id_keluhan?message=gagalEdit#keluhan");
}
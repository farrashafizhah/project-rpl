<?php
	include "connection.php";
	
	$id_kamar	 	= $_POST['id_kamar'];
	$harga		 	= $_POST['harga'];
	$fasilitas		= $_POST['fasilitas'];
	$tipe		 	= $_POST['tipe'];
	
	$sql = "UPDATE kamar SET harga='$harga', fasilitas='$fasilitas' WHERE tipe='$tipe'";
	$query = mysqli_query($connect, $sql);


if ($query) {
    header("location:pemilik-home.php?message=berhasilEdit#room");
} else {
    header("location:pemilik-home.php?message=gagalEdit#room");
}

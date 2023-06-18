<?php
	include "connection.php";
	
	$id_penghuni 	= $_POST['id_penghuni'];
	$nama_penghuni 	= $_POST['nama_penghuni'];
	$nik 			= $_POST['nik'];
	$username	 	= $_POST['username'];
	$password	 	= $_POST['password'];
	$tgl_lahir	 	= $_POST['tgl_lahir'];
	$tgl_lahir		= date('Y-m-d', strtotime($tgl_lahir));

	$alamat		 	= $_POST['alamat'];
	$no_hp		 	= $_POST['no_hp'];
	$pekerjaan	 	= $_POST['pekerjaan'];
	
	$sql = "UPDATE penghuni SET nama_penghuni='$nama_penghuni', nik='$nik', username='$username', password = '$password', tgl_lahir='$tgl_lahir', alamat='$alamat', no_hp='$no_hp', pekerjaan='$pekerjaan' WHERE id_penghuni=$id_penghuni";
	$query = mysqli_query($connect, $sql);


if ($query) {
    header("location:penghuni-home.php?id=$id_penghuni?message=berhasilEdit#profil");
} else {
    header("location:penghuni-edit.php?message=gagalEdit#edit");
}

<?php
	include "../config/config.php";
		$sql="UPDATE admin SET username='$_POST[username]',password='".md5($_POST[password])."',level='$_POST[level]' WHERE id='$_POST[id]'";
		$qry=mysql_query($sql);
		if($qry){
			echo "<script>alert('Data Telah diupdate');window.location.href='../index.php?p=data_pengguna';</script>";
		}else{
			echo "Data gagal diupdate".mysqli_error();
		}
?>
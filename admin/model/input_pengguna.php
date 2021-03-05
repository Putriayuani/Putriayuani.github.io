<?php
	 include "../config/config.php";
	 $password =md5($_POST["password"]);
	 $sql="INSERT INTO admin VALUES ('','$_POST[username]','$password','$_POST[level]')";
	 $qry=mysql_query($sql);
			if ($qry){
				echo "<script>alert('Data Telah ditambah');window.location.href='../index.php?p=data_pengguna';</script>";
			}else{
				echo "Data gagal diupdate".mysqli_error();
			}
?>
<?php
//nama file = hapus data buku tamu 
include "../config/config.php";
$sql="DELETE FROM users WHERE id='$_GET[id]'";
$qry=mysql_query($sql);
if($qry){
	echo "<script>alert('Data Telah dihapus');window.location.href='../index.php?p=data_user';</script>";
}else{
	echo "Data gagal dihapus".mysqli_error();
}
?>
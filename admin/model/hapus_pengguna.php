<?php
//nama file = hapus data buku tamu 
include "../config/config.php";
$sql="DELETE FROM admin WHERE id='$_GET[id]'";
$qry=mysql_query($sql);
if($qry){
	echo "<script>alert('Data Telah dihapus');window.location.href='../index.php?p=data_pengguna';</script>";
}else{
	echo "Data gagal dihapus".mysqli_error();
}
?>
<?php
//nama file = hapus data buku tamu 
include "../config/config.php";
$sql="DELETE FROM buku WHERE id_buku='$_GET[id]'";
$qry=mysql_query($sql);
if($qry){
	echo "<script>alert('Data Telah dihapus');window.location.href='../index.php?p=data_bukutamu';</script>";
}else{
	echo "Data gagal dihapus".mysqli_error();
}
?>
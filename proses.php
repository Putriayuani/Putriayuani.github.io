<?php

require_once("config.php");

if(isset($_POST['submit'])){
        

            $tanggal = filter_input(INPUT_POST, 'tanggal', FILTER_SANITIZE_STRING);
            $noktp = filter_input(INPUT_POST, 'noktp', FILTER_SANITIZE_STRING);
            $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
            $notel = filter_input(INPUT_POST, 'notel', FILTER_SANITIZE_STRING);
            $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
            $bertemu = filter_input(INPUT_POST, 'bertemu', FILTER_SANITIZE_STRING);
            $keperluan = filter_input(INPUT_POST, 'keperluan', FILTER_SANITIZE_STRING);
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

            if($tanggal && $noktp && $nama && $notel && $alamat && $bertemu && $keperluan){
                    if($_FILES['upload']['name'] != "") {
                    $file = $_FILES['upload'];
                    $file_name = $file['name'];
                    $file_temp = $file['tmp_name'];
                    $name = explode('.', $file_name);
                    $path = "files/".$file_name;
                    $conn->query("INSERT INTO `file` VALUES('', '$name[0]', '$path', '$_POST[id]')") or die(mysqli_error());
                    $query = mysql_query("INSERT INTO buku (tanggal,noktp,nama,notel,alamat,bertemu,keperluan,id)
                        values ('$tanggal','$noktp','$nama','$notel','$alamat','$bertemu','$keperluan','$id');");
                            echo "<script>alert('Terima Kasih Anda Telah Mengisi Form');window.location.href='timeline.php';</script>";
                    move_uploaded_file($file_temp, $path);
                    header("");
                    }else{

                    }
            }
    else{
    echo "<script>alert('Maaf, tidak boleh ada field yang kosong !');window.location.href='register.php'</script>";
    }
         
}
?>

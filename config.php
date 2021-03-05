<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "buku_tamu";

        try {    
            //create PDO connection 
            $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        } catch(PDOException $e) {
            //show error
            die("Terjadi masalah: " . $e->getMessage());
        }
        
$conn = new mysqli('localhost', 'root', '', 'buku_tamu');
if($conn->connect_error){
 die("Fatal Error: Can't connect to database: ". $conn->connect_error);
}
mysql_connect("localhost","root","");
mysql_select_db("buku_tamu");
?>


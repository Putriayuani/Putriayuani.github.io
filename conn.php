<?php

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'buku_tamu');

// $conn = new mysqli('localhost', 'root', '', 'buku_tamu');
// if($conn->connect_error){
//  die("Fatal Error: Can't connect to database: ". $conn->connect_error);
// }
// mysql_connect("localhost","root","");
// mysql_select_db("buku_tamu");
?>
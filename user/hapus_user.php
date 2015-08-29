<?php
$conn=mysql_connect("localhost","root",""); 
mysql_select_db("perpustakaan"); 
$id = $_GET['id'];
$sql="DELETE FROM users WHERE username='$id'"; 
$hasil=mysql_query($sql,$conn); 

header("location:daftar_user.php"); 

?>
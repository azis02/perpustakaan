<?php session_start();
if(ISSET($_SESSION['username'])){
include "koneksi.php";
?>
<h1>isi dengan script yang dinginkan</h1>
<? include ="../project_6" ?>
<a href="logout.php">Logout</a>
<?php
}else{
?>Anda tidak boleh mengakses halaman ini. silahkan<a href="form_admin.php">Login
dahulu</a><?php
}
?>


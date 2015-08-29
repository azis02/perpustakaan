<?php session_start();
include "../koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from admin where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
if($cek){
$_SESSION[username] = $username;
$_SESSION[password] = $password;
$_SESSION["login"] = 1;

?>Anda berhasil login. silahkan menuju <a href="../admin/server.php">Halaman HOME</a>
<?php
}else{
?>Anda gagal login. silahkan <a href="form_admin.php">Login kembali</a><?php
echo mysql_error();
}
?>   
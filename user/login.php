<?php session_start();
include "../koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from users where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
if($cek){
$_SESSION[username] = $username;
$_SESSION[password] = $password;

?>Anda berhasil login. silahkan menuju <a href="../index.php">Halaman HOME</a>
<?php
}else{
?>Anda gagal login. silahkan <a href="login_user.php">Login kembali</a><?php
echo mysql_error();
}
?>  
<?php include "../koneksi.php"; 
$username = $_POST ['username'];
$password = $_POST ['password'];
$nama_lengkap = $_POST ['nama_lengkap'];
$email = $_POST ['email'];
$no_telp = $_POST ['no_telp'];



  $sql = "INSERT INTO users SET
      username = '$username',
      password = '$password',
      nama_lengkap = '$nama_lengkap',
      email = '$email',
      no_telp = '$no_telp'
      ";
  
  mysql_query($sql) or die ("SQL Error : ".mysql_error());


?>Anda berhasil mendaftar. silahkan menuju <a href="../user/login_user.php">MENU LOGIN</a>

<?php
session_start();
unset($_SESSION['UserOK']);
session_destroy();
?>
<p>
	Anda Sekarang Sudah Logout.  klik<a href='../user/login_user.php'><h4>LOGIN</h4></a> untuk masuk !!!
</p>

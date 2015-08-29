<?php
session_start();
unset($_SESSION['UserOK']);
session_destroy();
?>
<p>
	<a href='../admin/form_admin.php'><h4>Lakukan LOGIN</h4></a>
</p>
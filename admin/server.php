<?php  session_start();
include "../koneksi.php";
$query=mysql_query("select * from admin where username='$_SESSION[username]' and password='$_SESSION[password]'");
$cek=mysql_num_rows($query);
if($cek){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>perpustakaan</title>
<link href="../css/css3.css" rel="stylesheet" type="text/css" />
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-family: "Courier New", Courier, monospace;
	color: #FFFFFF;
}
.style2 {
	font-size: 36px;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #FFFF00;
}
.style4 {color: #FF0000}


-->
</style>
</head>
<body bgcolor="#FFFFFF">
<div class="head" style="box-shadow:0px 1px 2px #000;border:2px solid #FFFFFF;">
		<div class="head2">
		  
		<tr>
		  <td width="1282"><p>&nbsp;</p>
	      <p align="center"><img src="../include/images/football.jpg" width="604" height="230" /></p></td>
		</tr>
		<tr>
		  <td><span class="style1"> </span></td>
		</tr>
	  
  </div>
       <h1>MENU UTAMA ADMIN </h1>
</div>
  <div class="info">
    
  </div>
  <div class="info2">
   <ul>
<li> <a href="index.php?module=home">&#187; Beranda</a></li>
<li> <a href="daftar_user.php?module=user">&#187; User</a></li>
<li> <a href="logout.php">&#187; <b> Logout</b></a></li>
</ul>
  </div>
<div class="foter" style="box-shadow:0px 1px 2px #000;border:2px solid #FFFFFF;">
<h4 align="center">abd_azis&copy;copyright 2015</h4>
</div>
</body>
</html>
<?php } else { ?> anda tidak layak masuk bro!  <td height="26" align="right"><a href="form_admin.php" ><button>LOGIN</button></a> <?php } ?>

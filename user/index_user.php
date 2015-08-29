<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Halaman Utama</title>
<link rel="stylesheet" href="../include/style.css" />
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<style type="text/css">
<!--
#form1 table tr td p marquee {
	color: #F00;
}
#form1 table tr td p {
	color: #F00;
}
.content {
width:80%;
}
-->
</style>
</head>

<body>
<center>
<div class="content">
  <table width="100"> 
  <tr>
  <td height="241" align="center" valign="top"><table width="1000" height="292" border="0">
    <tr>
    <center>
      <td width="100" height="288" valign="top"><h1 align="center"><center>
        <img src="include/images/football.jpg" width="988" height="352" />
      </center></h1></td>
      </center>
    </tr>
  </table>    
  </marquee>
    </p>
  <p> <marquee behavior="scroll">*Selamat Datang*</td>
  </tr>
  <tr>
    <td height="26" align="right"><a href="login_user.php" ><button>LOGIN</button></a>
      <a href="dafuser.php" ><button>DAFTAR</button></a></td>
  </tr>
  </table>
  <center>
  <p>
 <?php include "koneksi.php"; 
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
  
  mysql_query($sql) 

?>
</div>

</body>
</html>
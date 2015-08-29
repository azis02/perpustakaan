<?php session_start();

 include "../koneksi.php"; ?>


  <div id="content" class="container">
    <div class="row">
      <div id="main_content" class="col-sm-8">
       <div align="center"> <img src='http://localhost/Project_6/include/images/daftar.jpg' class='img-responsive'></div>
      </div>
      
    </div>
  </div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOG-IN USER</title>
</head>

<body>
<div align="center"><h1>Silahkan Login</h1></div>
<form id="form1" name="form1" method="post" action="login.php">
  <div align="center">
    <table width="200" border="1">
      <tr>
        <td>Username</td>
        <td><label>
          <input type="text" name="username" id="id_user" />
        </label></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><label>
          <input type="password" name="password" id="password" />
        </label></td>
      </tr>
      <tr>
        <td colspan="2"><label>
          <div align="center">
            <input type="submit" name="button" id="button" value="Login" />
            </div>
        </label></td>
      </tr>
    </table>
  </div>

</form>

<p align="center">&nbsp; MENDAFTAR klik <a href="dafuser.php" >DAFTAR</a></p>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>perpustakaan</title>
<link href="../css/css3.css" rel="stylesheet" type="text/css" />
<link href="../include/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
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

    <div class="head2">
      
    <tr>
      <td width="1282"><p>&nbsp;</p>
        <p align="center"><img src="../include/images/football.jpg" width="604" height="230" /></p></td>
    </tr>
    <tr>
      <td><span class="style1"> </span></td>
    </tr>
  

  

      </div><!-- #main_content -->
    


<?php 
$conn = mysql_connect("localhost","root","");
    mysql_select_db("perpustakaan",$conn);
          ?>
  <div id="content" class="container">
    <div class="row">
      <div id="main_content" class="col-sm-12">
          <h2>Data User</h2>
          
         

          <div>&nbsp;</div>

          <table class="table table-hover table-bordered"> 
          <tr>
            <td>No</td>
            <td>NAMA</td>
            <td>PASSWORD</td>
            <td>NAMA LENGKAP</td>
            <td>EMAIL</td>
            <td>TELEPON</td>
            <td>OPSI</td>
          </tr>

          <?php 
            $conn=mysql_connect("localhost","root",""); 
            mysql_select_db("perpustakaan"); 
            $sql="select * from users"; 
            $hasil=mysql_query($sql,$conn); 
          ?>
          <?php $no = 1; ?>
          <?php while($data = mysql_fetch_array($hasil)) { ?>
          <tr>
            <td><?php print $no; ?></td>
            <td><?php print $data['username']; ?></td>
            <td><?php print $data['password']; ?></td>
            <td><?php print $data['nama_lengkap']; ?></td>
            <td><?php print $data['email']; ?></td>
            <td><?php print $data['no_telp']; ?></td>
      

            <td>
              <a href="hapus_user.php?id=<?php print $data['username']; ?>"class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
              <a href="update_user.php?id=<?php print $data['username']; ?>"class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-pencil"></i> Update</a>
            </td>
             
            
          </tr> 
          <?php $no++; } ?>
        </table>
  </div><!-- #content -->




 <td>
              <a href="server.php?id=<?php print $data['username']; ?>"class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-arrow-left"></i> kembali ke halaman server</a>
            </td>

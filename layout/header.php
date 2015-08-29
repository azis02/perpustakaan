<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<title>Perpustakaan</title>
	<link  href="http://localhost/Project_6/include/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="http://localhost/Project_6/include/bootstrap/js/bootstrap.js"></script>
	<link  href="http://localhost/Project_6/include/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

	<div id='header' class='container'>
		<div class="col-md-7">
	<img src='http://localhost/Project_6/include/images/gh.jpg' class='img-responsive'></div>

	<div class="col-md-5">
		<form class="navbar-form navbar-left" role="search">
		<h1> 
    <input type="text" class="form-control" placeholder="Search">
    <button type="submit" class="btn btn-default">cari</button>
   
		 <td>
	<a href="../project_6/user/logout.php?id=<?php print $data['id']; ?>"style="margin-left: 40px" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-remove-sign"></i>LOGOUT</a>
</td
  </h1> 

</div>
</div>

<div id='main_menu' class='container'>
	<ul>
		<li><a href='http://localhost/Project_6/index.php'>HOME</a></li>
		<li><a href='http://localhost/Project_6/buku/index.php'>BUKU</a></li>
		<li><a href='http://localhost/Project_6/penulis/index.php'>PENULIS</a></li>	
		<li><a href='http://localhost/Project_6/penerbit/index.php'>PENERBIT</a></li>
		<li><a href='http://localhost/Project_6/kategori/index.php'>KATEGORI</a></li>
		<li><a href='http://localhost/Project_6/member/index.php'>MEMBER</a></li>
	</ul>
</div>
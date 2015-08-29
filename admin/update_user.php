<?php

//error_reporting(E_ALL);
if(isset($_POST['id'])){
include "../include/conn.php";
	$id = $_POST ['id'];
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	$nama_lengkap = $_POST ['nama_lengkap'];
	$email = $_POST ['email'];
	$no_telp = $_POST ['no_telp'];
	
	$sql = mysql_query("UPDATE users SET
				username = '".$username."',
				password = '".$password."',
				nama_lengkap = '".$nama_lengkap."',
				email = '".$email."',
				no_telp = '$no_telp',
				
				WHERE id ='".$id."';") or die(mysql_error());
	print $id;
	print $username;
	print $password;
	print $nama_lengkap;
	print $email;
	print $no_telp;
	
}
	///header("location: ../form/update.php?id_buku=".$id_buku);
?>

<?php include "../layout/header.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				<div id="update-buku">
					<form action="" method="post">
					<?php
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpustakaan"); 
						$id = $_GET['id'];
						$sql="select * from users WHERE username = ".$_GET['id']; 
						$hasil=mysql_query($sql,$conn); 

					?>

					<?php 
						$username = "";
						while($data = mysql_fetch_array($hasil)) {
							$username = $data['username'];
							$password = $data['password'];
							$nama_lengkap = $data['nama_lengkap']; 
							$email = $data['email'];
							$no_telp = $data['no_telp'];
							
						}
					?>

					<table border="1">
						<tr>
							<td colspan="2"><h2>Update Data user</h2></td>
						</tr>
						<tr>
							<td>USER NAME</td>
							<td>
								<label>
									<input name="username" type="text" id="username" size="50" maxlength="50" value="<?php print $username; ?>" />
								</label>
							</td>
						</tr>
						<tr>
							<td>PASSWORD</td>
							<td>
								<label>
									<input name="password" type="text" id="password" size="50" maxlength="20" value="<?php print $password; ?>" />
								</label>
							</td>
						</tr>
						<tr>
							<td>NAMA LENGKAP</td>
							<td>
								<label>
									<input name="nama_lengkap" type="text" id="nama_lengkap" size="50" maxlength="50" value="<?php print $nama_lengkap; ?>" />
								</label>
							</td>
						</tr>
						<tr>
							<td>EMAIL</td>
							<td>
								<label>
									<input name="email" type="text" id="email" size="50" maxlength="50" value="<?php print $email; ?>" />
								</label>
							</td>
						</tr>
						<tr>
							<td>NO TELP</td>
							<td>
								<label>
									<input name="no_telp" type="text" id="no_telp" size="50" maxlength="50" value="<?php print $no_telp; ?>" />
								</label>
							</td>
						
						<tr>
							<td colspan="2">
								<label>
									<input type="hidden" name="id" id="id" value="<?php print $_GET['id']; ?>" />
									<input type="submit" name="submit" id="submit" value="SAVE DATA" />
								</label>
							</td>
						</tr>
					</table>
				</form>
				</div>
				<div></div>
			</div>
			<?php include "../layout/sidebar.php"; ?>
		</div>
	</div>

<?php include "../layout/footer.php";	?>

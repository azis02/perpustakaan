<?php
include "../include/conn.php";

$Nama = $_POST ['nama'];
$Alamat = $_POST ['alamat'];
$Telepon = $_POST ['telepon'];
 
$error = 0;

if (trim($Nama)=="") {
	echo "Masih Kosong,ulangi kembali";
	$error = 1;
}
elseif (trim($Alamat)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($Telepon)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;
}
if($error==0)
{

	$sql = "INSERT INTO penerbit SET
			nama = '$Nama',
			alamat = '$Alamat',
			telepon = '$Telepon'
			";
	
	mysql_query($sql, $koneksi) or die ("SQL Error : ".mysql_error());
	echo "Berhasil Menyimpan Data dari : <b>$Nama</b>";
	
}

?>
<?php include "../layout/header.php" ?>

	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-12">
				<div class="form-group">
				<form action="input.php" method="post" name="form1" target="_self" id="form1">

					
						<div class="form">
							<label><h2><p style="text-align:center;">.::Input Data Penerbit::.</p></h2>
							</label>
						</div>
						
						<div class="form-group">
							<lebel>NAMA PENULIS</lebel> &nbsp
							
									<input name="nama" type="text" class="form-control col-xs-12" id="nama" size="50" maxlength="20" />
							</div>
							<div>&nbsp</div>
					
						<div class="form-group">
							<lebel>ALAMAT</lebel>
									<input name="alamat" type="text" class="form-control" id="alamat" size="50" maxlength="20" />
							</div>

						<div class="form-group">
							<lebel>TELEPON</lebel>
									<input name="telepon" type="text" class="form-control col-xs-12" id="telepon" size="50" maxlength="20" />
							</div>
						<div>&nbsp</div>
						<div class="form-actions well">
							<colspan="2">
									<input type="submit" name="submit" id="submit" value="SAVE DATA" />
							</div>
									</form>
			</div>
			
		</div>
	</div>

<?php include "../layout/footer.php";	?>